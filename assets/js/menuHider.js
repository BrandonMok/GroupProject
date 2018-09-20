function menuHider() {
	var ul = document.getElementsByClassName('topNav-ul')[0];
	if (window.getComputedStyle(ul).display != 'none') {
		ul.style.display = 'none';
	} else {
		ul.style.display = 'block';
	}
}