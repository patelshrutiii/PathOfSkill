<?php 
require_once "header.php";
require_once "script.php";
?>
<style>
.headerb {
	position: fixed;
	display: flex;
	align-items: center;
	width: 100%;
	height: 60px;
	background: #000;
	z-index: 1;
	overflow: hidden;
	background: #FDC74B;
	background-size: 100% 700px;
}

.sectionb {
	width: 100%;
}

section.hero {
	height: 700px;
	background: #FDC74B;
}

section.contentb {
	position: relative;
	height: 1500px;
}

.svgb {
	position: absolute;
	top: -130px;
	left: 0;
	width: 100%;
	height: 130px;
	transform-origin: center bottom;
	transform: scaleY(1);
}
</style>
<header class="headerb"></header>
<section class="hero sectionb">
hello</section>
<section class="contentb">hello
	<svg class="svgb" width="3" height="3" preserveAspectRatio="none" viewBox="0 0 3 3" xmlns="http://www.w3.org/2000/svg"><path d="M0 0l1.5 2 1.5-2v3h-3v-3z" fill="#fff"/>hello</svg>
</section>
<script>
let headerElem = document.querySelector('header'),
    heroElem   = document.querySelector('.hero'),
    svgElem    = document.querySelector('svg')

let headerHeight = parseFloat(getComputedStyle(headerElem, null).height),
    heroHeight   = parseFloat(getComputedStyle(heroElem, null).height),
    svgHeight    = parseFloat(getComputedStyle(svgElem, null).height)

let scrollHeight = heroHeight - headerHeight,
		prevScroll   = null

const setHeight = function() {
	
	let scrollTop = window.scrollY
	
	if (prevScroll!==scrollTop && scrollTop <= scrollHeight) {
		
		prevScroll = scrollTop
		
		let newHeight = ((scrollHeight - scrollTop) / heroHeight) * svgHeight
	
		svgElem.style.transform = `scaleY(${ newHeight / 100 })`
		
	}
	
	requestAnimationFrame(setHeight)
	
}

requestAnimationFrame(setHeight)
</script>