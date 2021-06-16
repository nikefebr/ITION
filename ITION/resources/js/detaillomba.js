window._addEventListeners("scroll",function(){
	var component = document.getElementById("sticky_scrolled");
	component.classList.toggle("sticky",window.scrollY > 0)
})