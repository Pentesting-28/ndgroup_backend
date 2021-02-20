
<style type="text/css">	
@import 'https://fonts.googleapis.com/css?family=Inconsolata';
body{ margin:0px; }
.bgw{min-height:100%;position: relative;}
.bgt{box-sizing:border-box;height:100%;background-color:#000;background-image:radial-gradient(#11581E,#041607),url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;font-family:Inconsolata,Helvetica,sans-serif;font-size:1.5rem;color:rgba(128,255,128,.8);text-shadow:0 0 1ex rgba(51,255,51,1),0 0 2px rgba(255,255,255,.8)}
.noise{pointer-events:none;position:absolute;width:100%;height:100%;background-image:url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;z-index:-1;opacity:.02;}
.overlay{pointer-events:none;position:absolute;width:100%;height:100%;background:repeating-linear-gradient(180deg,rgba(0,0,0,0) 0,rgba(0,0,0,.3) 50%,rgba(0,0,0,0) 100%);background-size:auto 4px;z-index:1;}
.overlay::before{content:"";pointer-events:none;position:absolute;display:block;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background-image:linear-gradient(0deg,transparent 0,rgba(32,128,32,.2) 2%,rgba(32,128,32,.8) 3%,rgba(32,128,32,.2) 3%,transparent 100%);background-repeat:no-repeat;animation:scan 7.5s linear 0s infinite}
@keyframes  scan{0%{background-position:0 -100vh}
100%,35%{background-position:0 100vh}}
.terminal{box-sizing:inherit;height:100%;width:1000px;max-width:100%;padding:4rem;text-transform:uppercase;}
.output{color:rgba(128,255,128,.8);text-shadow:0 0 1px rgba(51,255,51,.4),0 0 2px rgba(255,255,255,.8)}
.terminal .output a{ color:#FFF; text-decoration:none; }
.output::before{content:"> "}
.errorcode{color:#fff}
</style>

<section class="bgw" >
	<div class="bgt" >
		<div class="noise"></div>
		<div class="overlay"></div>
		<div class="terminal">
			<h1>Error <span class="errorcode">404</span></h1>
			<p class="output">La página que está buscando podría haberse eliminado, haber cambiado su nombre o no está disponible temporalmente.</p>
			<p class="output">Intente <a href="javascript:window.history.back();">[Regresar]</a> o <a href="/">[Regresar a la página de inicio]</a>.</p>
			<p class="output">Buena suerte.</p>
		</div>
	</div>
</section>




