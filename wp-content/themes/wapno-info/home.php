<?php
/**
 * Template Name: Home
 * Description: home template
 *
 */

get_header();

?>
<div class="home">
<div class="container--front">
	<div class="container">
		<div class="row home__hero">
			<div class="col-4 home__hero--intro">
				<div>
					<h1>Wapno<br><span>Dar natury</span></h1>
					<div class="home__hero--txt">
						Ekologiczne budownictwo<br>
						Zdrowe rolnictwo<br>
						Czyste środowisko<br>
					</div>
					<a class="color-primary" href="">O stowarzyszeniu <span>&rarr;</span></a>
				</div>
			</div>
			<div class="col-8 home__carousel">
				<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/slider_1.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/slider_1.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/slider_1.png" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="row home__cats--row">
			<div class="col-10">
				<div class="row home__cats--wrap">
					<div class="home__cats">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="69.41" height="66.38" viewBox="0 0 69.41 66.38">
								<g id="Group_333" data-name="Group 333" transform="translate(-1100.504 -215.198)">
									<g id="Group_331" data-name="Group 331">
									<path id="Path_319" data-name="Path 319" d="M1145.378,263.682l13.284-10.744a7.468,7.468,0,0,1,8.254-.76h0a1.886,1.886,0,0,1,.75,2.573l-.891,1.6a59.58,59.58,0,0,1-19.033,20.638h0a15.392,15.392,0,0,1-8.538,2.585h-28.765" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_320" data-name="Path 320" d="M1101.98,264.692l1.324-1.449a19.6,19.6,0,0,1,14.464-6.373h0a15.389,15.389,0,0,1,8.13,2.322h0a15.392,15.392,0,0,0,8.13,2.322h6.986a4.645,4.645,0,0,1,4.644,4.645h0a4.644,4.644,0,0,1-4.644,4.644h-15.569" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									</g>
									<g id="Group_332" data-name="Group 332">
									<path id="Rectangle_156" data-name="Rectangle 156" d="M15.556,0H25.6a0,0,0,0,1,0,0V10.043A15.556,15.556,0,0,1,10.043,25.6H0a0,0,0,0,1,0,0V15.556A15.556,15.556,0,0,1,15.556,0Z" transform="translate(1118.72 236.128) rotate(-45)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<line id="Line_211" data-name="Line 211" y1="31.242" transform="translate(1136.678 229.606)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<line id="Line_212" data-name="Line 212" x1="5.818" y1="5.818" transform="translate(1131.003 235.458)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<line id="Line_213" data-name="Line 213" y1="5.818" x2="6.465" transform="translate(1136.822 238.068)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									</g>
								</g>
							</svg>
						</i>
						<span>
							Ochrona środowiska
						</span>
					</div>
					<div class="home__cats">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="55.141" height="56.483" viewBox="0 0 55.141 56.483">
								<g id="Group_326" data-name="Group 326" transform="translate(-797.668 -222.356)">
									<path id="Path_308" data-name="Path 308" d="M804.735,244.338v32.5h41v-32.5" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<g id="Group_325" data-name="Group 325">
									<path id="Path_309" data-name="Path 309" d="M851.708,242.192l-26.47-17.44-26.47,17.44" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									</g>
									<rect id="Rectangle_155" data-name="Rectangle 155" width="14.789" height="19.972" transform="translate(817.84 256.868)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_310" data-name="Path 310" d="M807.179,236.65V224.605h8.813v6.238" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
								</g>
							</svg>
						</i>
						<span>
							Budownictwo
						</span>
					</div>
					<div class="home__cats">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="60.3" height="60.3" viewBox="0 0 60.3 60.3">
								<g id="Group_327" data-name="Group 327" transform="translate(-888.05 -220.87)">
									<path id="Path_311" data-name="Path 311" d="M946.35,251.02a28.15,28.15,0,1,1-56.3,0,27.478,27.478,0,0,1,1.08-7.69,28.138,28.138,0,0,1,54.14,0A27.48,27.48,0,0,1,946.35,251.02Z" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_312" data-name="Path 312" d="M938.39,231.41a25.377,25.377,0,0,1-40.39,0,28.148,28.148,0,0,1,40.39,0Z" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_313" data-name="Path 313" d="M911.32,278.32a28.162,28.162,0,0,1-21.27-27.3,27.478,27.478,0,0,1,1.08-7.69,25.381,25.381,0,0,1,20.19,34.99Z" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_314" data-name="Path 314" d="M946.35,251.02a28.162,28.162,0,0,1-21.27,27.3,25.381,25.381,0,0,1,20.19-34.99A27.48,27.48,0,0,1,946.35,251.02Z" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<circle id="Ellipse_32" data-name="Ellipse 32" cx="3.424" cy="3.424" r="3.424" transform="translate(914.771 247.596)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
								</g>
							</svg>
						</i>
						<span>
							Drogownictwo
						</span>
					</div>
					<div class="home__cats">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="84.622" height="64.107" viewBox="0 0 84.622 64.107">
								<g id="Group_330" data-name="Group 330" transform="translate(-990.047 -216.955)">
									<g id="Group_329" data-name="Group 329">
									<g id="Group_328" data-name="Group 328">
										<circle id="Ellipse_33" data-name="Ellipse 33" cx="17" cy="17" r="17" transform="translate(992.047 244.522)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<circle id="Ellipse_34" data-name="Ellipse 34" cx="6.735" cy="6.735" r="6.735" transform="translate(1002.312 254.787)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<circle id="Ellipse_35" data-name="Ellipse 35" cx="10.38" cy="10.38" r="10.38" transform="translate(1051.91 258.303)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<circle id="Ellipse_36" data-name="Ellipse 36" cx="1.884" cy="1.884" r="1.884" transform="translate(1060.405 266.798)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<path id="Path_315" data-name="Path 315" d="M994.661,252.461l-.7-11.235a4.215,4.215,0,0,1,3.854-4.549,4.062,4.062,0,0,1,.505.007l3.483.252a1.467,1.467,0,0,0,1.541-1.161l2.967-14.092a3.425,3.425,0,0,1,3.6-2.71l23.92,1.729a3.421,3.421,0,0,1,3.137,2.893c.8,5.233,2.224,16.544,2.224,16.544a126.714,126.714,0,0,1,23.4,4.614,6.887,6.887,0,0,1,4.4,4.3c.2.56.641,10.181.85,10.852" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<line id="Line_209" data-name="Line 209" x1="1.406" y2="19.445" transform="translate(1021.098 219.884)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<path id="Path_316" data-name="Path 316" d="M1055.372,249.182" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
										<path id="Path_317" data-name="Path 317" d="M1053.536,245.809" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									</g>
									<path id="Path_318" data-name="Path 318" d="M1049.612,241.27l.653-9.029a9.465,9.465,0,0,1,.979-3.559,9.3,9.3,0,0,1,2.266-2.914" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									</g>
									<line id="Line_210" data-name="Line 210" x2="27.402" y2="0.576" transform="translate(1026.002 262.748)" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
								</g>
							</svg>
						</i>
						<span>
							Rolnictwo
						</span>
					</div>
					<div class="home__cats">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="62.75" height="69.004" viewBox="0 0 62.75 69.004">
								<g id="Group_334" data-name="Group 334" transform="translate(-1198.809 -213.703)">
									<path id="Path_321" data-name="Path 321" d="M1213.948,233.629H1202.46l-1.583,47.078h14.654Z" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_322" data-name="Path 322" d="M1229.593,258.372V246.008a1.534,1.534,0,0,0-2.239-1.361l-12.7,6.6.87,29.46h14.065" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_323" data-name="Path 323" d="M1244.624,280.7v-29.46l12.7-6.6a1.533,1.533,0,0,1,2.238,1.361v34.7h-29.966v-29.46l12.7-6.6a1.534,1.534,0,0,1,2.239,1.361v34.7" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_324" data-name="Path 324" d="M1227.059,217.579h11.472a6.094,6.094,0,0,1,6.094,6.094h0a6.094,6.094,0,0,1-6.094,6.094h-20.565a4.022,4.022,0,0,0-4.018,3.862H1202.3v-9.545a8.288,8.288,0,0,1,7.959-8.379,8.111,8.111,0,0,1,7.611,4.92" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
									<path id="Path_325" data-name="Path 325" d="M1216.139,218.079a8.113,8.113,0,0,1,12.982,2.089" fill="none" stroke="#95c11f" stroke-miterlimit="10" stroke-width="4"/>
								</g>
							</svg>
						</i>
						<span>
							Przemysł
						</span>
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="col home__cats home__find">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="74.395" height="71.963" viewBox="0 0 74.395 71.963">
							<g id="Group_336" data-name="Group 336" transform="translate(-1310.627 -209.619)">
								<g id="Group_335" data-name="Group 335">
								<circle id="Ellipse_37" data-name="Ellipse 37" cx="14.364" cy="14.364" r="14.364" transform="translate(1332.891 230.264)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4"/>
								</g>
								<path id="Path_326" data-name="Path 326" d="M1383.1,258.309l-3.863-13.038-6.095-3.1,9.2-7.63V230.8l-8.269-13.437h-34.382V212.2l-10.752,2.756-2.756,5.513-13.437,2.412,2.412,34.8,8.613,5.168,1.723,5.168h12.059l6.891,11.025,7.58-3.445,9.782.635" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4"/>
								<line id="Line_214" data-name="Line 214" x2="10.168" y2="10.168" transform="translate(1359.203 256.576)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
							</g>
						</svg>
					</i>
					<span>
						Znajdź producenta
					</span>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


<?php
get_footer();
