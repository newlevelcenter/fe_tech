/**
 *
 * Функция-класс для создания
 *
 * Если на странице будет одно выпадающее меню, то, вызываем так:
 *   ddMenu(UL_ELEMENT_IDENTIFIER); // в качестве параметра передаем идентификатор главного тега UL
 *
 * Если на странице несколько выпадающих меню, то, вызываем так:
 *   (new ddMenu(UL_ELEMENT_IDENTIFIER_1));
 *   (new ddMenu(UL_ELEMENT_IDENTIFIER_2));
 *   (new ddMenu(UL_ELEMENT_IDENTIFIER_X));
 *
 * Примечание:
 *   Когда используется несколько меню, могут возникнуть проблемы в браузере Internet Explorer 6 версии.
 *
 * Автор: Артем Федоров
 *
 */
function ddMenu(dropdownmenuid)
{
	this.id = dropdownmenuid;
	this.mm = document.getElementById(this.id);
	
	this.zIndex = 1;
	
	this.closingTime = new Array();
	this.closingTimeout = new Array();
	
	
	this.init = function()
	{
		var mm, lis, i, y, ul, a;
		
		lis = this.mm.getElementsByTagName('li');
		
		for (i = 0; i < lis.length; i++)
		{
			li = lis[i];
			
			ul = false;
			a = false;
			
			for (y=0; y<li.childNodes.length; y++)
			{
				switch (li.childNodes[y].tagName)
				{
					case 'UL':
						ul = li.childNodes[y];
						break;
					
					case 'INS':
						a = li.childNodes[y].firstChild;
						break;
					
					case 'A':
						a = li.childNodes[y];
						break;
					
					default:
						break;
				}
			}
			
			if (ul)
			{
				a.className = 'dd';
				ul.id = ul.id || this.id+'_'+i;
				
				this.closingTime[ul.id] = 0;
				
				ul.style.display = 'none';
				ul.style.zIndex = 0;
				
				li.onmouseover = function(object, ul)
				{
					return function()
					{
						this.className = 'hover';
						object.showMenu(ul);
					}
				}(this, ul)
				
				li.onmouseout = function(object, ul)
				{
					return function()
					{
						this.className = '';
						object.closeMenu(ul);
					}
				}(this, ul)
			}
			else
			{
				li.onmouseover = function(){this.className = 'hover';}
				li.onmouseout = function(){this.className = '';}
			}
		}
	}
	
	
	this.showMenu = function(ul)
	{
		ul.style.display = 'block';
		ul.style.zIndex = this.zIndex++;
		this.setClosingTime(ul);
	}
	
	
	this.setClosingTime = function(ul)
	{
		var cUl = ul;
		
		while (cUl.id != this.id)
		{
			this.closingTime[cUl.id] = 0;
			clearTimeout(this.closingTimeout[ul.id]);
			
			cUl = cUl.parentNode.parentNode;
		}
	}
	
	
	this.closeMenu = function(ul)
	{
		this.closingTime[ul.id]++;
		
		if (this.closingTime[ul.id] > 1)
		{
			this.closingTime[ul.id] = 0;
			clearTimeout(this.closingTimeout[ul.id]);
			
			ul.style.display = 'none';
			ul.style.zIndex = 0;
		}
		else
		{
			this.closingTimeout[ul.id] = setTimeout(function(object, ul)
			{
				return function()
				{
					object.closeMenu(ul);
				}
			}(this, ul), 500);
		}
	}
	
	
	this.init();
}