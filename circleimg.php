<?php 
echo '<div data-index="1" id="IMView-trigger-1" class="i-trigger-1" style="display:none;">';
if ($instagram) {
echo ' 
		<div class="IMView-widget-i IMView-main-widget is-in-desktop is-in-mobile  instagram-action-btn  instagram-0-channel  instagram"   id="IMView-channel-instagram" data-channel="instagram" data-code="" style="height: 54px; width: 54px;">
		<a class="set-url-target" rel="noopener" data-mobile-target="_blank" data-desktop-target="_blank" target="_blank" href="'.$instagram.'">
		

		<svg class="ico_d" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);">
		<defs>
		<linearGradient id="linear-gradient" x1="0.892" y1="0.192" x2="0.128" y2="0.85" gradientUnits="objectBoundingBox">	
		<stop offset="0" stop-color="#4a64d5"></stop>
		<stop offset="0.322" stop-color="#9737bd"></stop>
		<stop offset="0.636" stop-color="#f15540"></stop>
		<stop offset="1" stop-color="#fecc69"></stop>
		</linearGradient>
		</defs>
		<circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="url(#linear-gradient)"></circle>
		<path id="Path_1923" data-name="Path 1923" d="M13.177,0H5.022A5.028,5.028,0,0,0,0,5.022v8.155A5.028,5.028,0,0,0,5.022,18.2h8.155A5.028,5.028,0,0,0,18.2,13.177V5.022A5.028,5.028,0,0,0,13.177,0Zm3.408,13.177a3.412,3.412,0,0,1-3.408,3.408H5.022a3.411,3.411,0,0,1-3.408-3.408V5.022A3.412,3.412,0,0,1,5.022,1.615h8.155a3.412,3.412,0,0,1,3.408,3.408v8.155Z" transform="translate(10 10.4)" fill="#fff"></path>
		<path id="Path_1924" data-name="Path 1924" d="M45.658,40.97a4.689,4.689,0,1,0,4.69,4.69A4.695,4.695,0,0,0,45.658,40.97Zm0,7.764a3.075,3.075,0,1,1,3.075-3.075A3.078,3.078,0,0,1,45.658,48.734Z" transform="translate(-26.558 -26.159)" fill="#fff"></path>
		<path id="Path_1925" data-name="Path 1925" d="M120.105,28.251a1.183,1.183,0,1,0,.838.347A1.189,1.189,0,0,0,120.105,28.251Z" transform="translate(-96.119 -14.809)" fill="#fff"></path>
		</svg>
		</a>
		</div>
'; }

if ($phone) {
	echo '
		<div class="IMView-widget-i IMView-main-widget is-in-desktop is-in-mobile  phone-action-btn  phone-0-channel  phone"   id="IMView-channel-phone" data-channel="phone" data-code="" style="height: 54px; width: 54px;">
		<a class="set-url-target" rel="noopener" data-mobile-target="_blank" data-desktop-target="_blank" target="_blank" href="'.$phone.'">
		<svg class="ico_d" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);">

		<circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="#26d367"></circle>
		<path d="M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z" transform="translate(9.07179 9.07178)" fill="white"></path>
		</svg>
		</a>
		</div>
		'; }
		
		
		if ($viber) {
			echo '	
		<div class="IMView-widget-i IMView-main-widget is-in-desktop is-in-mobile  viber-action-btn  viber-0-channel  viber"   id="IMView-channel-viber" data-channel="viber" data-code="" style="height: 54px; width: 54px;">
		<a class="set-url-target" rel="noopener" data-mobile-target="_blank" data-desktop-target="_blank" target="_blank" href="'.$viber.'">
		<svg class="ico_d" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);"><circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="#665CAC"></circle><path d="M17.6837 2.14833C17.16 1.64578 15.0497 0.0389578 10.3496 0.0158143C10.3496 0.0158143 4.80418 -0.334645 2.10085 2.26405C0.596193 3.84111 0.0662511 6.14886 0.0126261 9.01205C-0.0441534 11.8752 -0.116705 17.2346 4.8168 18.6894H4.81995L4.8168 20.9078C4.8168 20.9078 4.78525 21.8071 5.3499 21.989C6.03125 22.2105 6.43186 21.5294 7.08482 20.7921C7.44127 20.3888 7.93651 19.7936 8.30874 19.3407C11.6808 19.6382 14.2769 18.9572 14.5702 18.858C15.2516 18.6265 19.1063 18.1075 19.7309 12.7481C20.3775 7.22338 19.4154 3.7254 17.6837 2.14833ZM18.2546 12.3513C17.7247 16.828 14.5986 17.1123 14.0245 17.3041C13.7785 17.3867 11.501 17.9818 8.63679 17.7835C8.63679 17.7835 6.50126 20.4813 5.83567 21.1856C5.73158 21.2947 5.60856 21.341 5.52654 21.3178C5.41298 21.2881 5.38144 21.1459 5.38144 20.9376C5.38459 20.64 5.40037 17.2512 5.40037 17.2512C5.39721 17.2512 5.39721 17.2512 5.40037 17.2512C1.23023 16.0378 1.47312 11.4719 1.52044 9.08148C1.56775 6.69108 1.99675 4.73379 3.26798 3.41792C5.55493 1.24904 10.2645 1.57305 10.2645 1.57305C14.2422 1.59288 16.1475 2.84594 16.5891 3.26583C18.0527 4.58501 18.8003 7.73585 18.2546 12.3513Z" transform="translate(9.47299 8.4238)" fill="white"></path><path d="M1.58982 1.72254C1.53935 0.628182 1.00941 0.0562059 0 1.00898e-07" transform="translate(20.166 15.5914)" stroke="white" stroke-width="0.518873" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3.35945 3.69636C3.38153 2.67804 3.09448 1.82834 2.49514 1.14395C1.8958 0.459565 1.06619 0.0793496 1.9253e-07 2.01796e-07" transform="translate(19.7592 14.0966)" stroke="white" stroke-width="0.518873" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.22371 5.71646C5.21109 3.94763 4.70639 2.55902 3.71275 1.5407C2.71911 0.525689 1.47942 0.00991877 -3.8506e-07 1.00898e-07" transform="translate(19.2931 12.6479)" stroke="white" stroke-width="0.518873" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.35738 8.04532C6.35738 8.04532 6.73276 8.07838 6.93149 7.81719L7.32263 7.30142C7.5119 7.04353 7.96929 6.88153 8.41722 7.14272C8.66641 7.2915 9.11434 7.57914 9.39193 7.79405C9.68844 8.02218 10.2972 8.55448 10.2972 8.55448C10.5875 8.80906 10.6537 9.18597 10.4581 9.58271C10.4581 9.58602 10.455 9.58933 10.455 9.58933C10.2531 9.96293 9.9818 10.3167 9.63797 10.644C9.63482 10.6473 9.63482 10.6473 9.63167 10.6506C9.35092 10.8953 9.07333 11.0375 8.80205 11.0705C8.77051 11.0771 8.7295 11.0804 8.68219 11.0771C8.56232 11.0771 8.44561 11.0606 8.32889 11.0209L8.31943 11.0077C7.89989 10.8854 7.20277 10.5746 6.03879 9.90342C5.28173 9.467 4.654 9.02066 4.12406 8.57762C3.84331 8.34619 3.55626 8.08169 3.2629 7.77752C3.25344 7.7676 3.24398 7.75768 3.23451 7.74776C3.22505 7.73784 3.21559 7.72792 3.20612 7.718C3.19666 7.70808 3.1872 7.69817 3.17773 7.68825C3.16827 7.67833 3.15881 7.66841 3.14934 7.65849C2.85914 7.35101 2.60678 7.05015 2.38597 6.75589C1.96328 6.20045 1.53744 5.5392 1.12105 4.74902C0.480708 3.52902 0.184194 2.79834 0.0674803 2.35862L0.0548623 2.3487C0.0170094 2.22637 -0.00191702 2.10404 0.0012374 1.9784C-0.00191702 1.92881 0.0012373 1.88583 0.00754613 1.85276C0.0390903 1.56843 0.17473 1.27748 0.408157 0.983227C0.411312 0.979921 0.411311 0.979921 0.414466 0.976615C0.726753 0.616237 1.06112 0.331902 1.42072 0.120304C1.42388 0.120304 1.42703 0.116997 1.42703 0.116997C1.80556 -0.0879887 2.16517 -0.0185578 2.40806 0.285615C2.41121 0.288921 2.91592 0.923716 3.13357 1.2345C3.33861 1.52875 3.6162 1.99493 3.75499 2.25612C4.00419 2.72561 3.84962 3.20501 3.60358 3.40338L3.11149 3.81335C2.86229 4.02495 2.89384 4.41509 2.89384 4.41509C2.89384 4.41509 3.62566 7.31464 6.35738 8.04532Z" transform="translate(13.863 13.0014)" fill="white"></path></svg>
		</a>
		</div>
		'; }
		
		
		if ($telegram) {
			echo '
		<div class="IMView-widget-i IMView-main-widget is-in-desktop is-in-mobile  telegram-action-btn  telegram-0-channel  telegram"   id="IMView-channel-telegram" data-channel="telegram" data-code="" style="height: 54px; width: 54px;">
		<a class="set-url-target" rel="noopener" data-mobile-target="_blank" data-desktop-target="_blank" target="_blank" href="'.$telegram.'">
		<svg class="ico_d" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);"><circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="#3E99D8"></circle><path d="M3.56917 -2.55497e-07L0 6.42978L7.5349 1.87535L3.56917 -2.55497e-07Z" transform="translate(13.9704 24.6145)" fill="#E0E0E0"></path><path d="M20.8862 0.133954C20.754 0 20.4897 0 20.2253 0L0.396574 8.03723C0.132191 8.17118 0 8.43909 0 8.707C0 8.97491 0.132191 9.24282 0.396574 9.37677L17.5814 17.414C17.7136 17.414 17.7136 17.414 17.8458 17.414C17.978 17.414 18.1102 17.414 18.1102 17.28C18.2424 17.1461 18.3746 17.0121 18.5068 16.7442L21.1506 0.669769C21.1506 0.535815 21.1506 0.267908 20.8862 0.133954Z" transform="translate(7.36069 10.9512)" fill="white"></path><path d="M13.8801 0L0 11.52V19.4233L3.70136 13.2614L13.8801 0Z" transform="translate(13.9704 11.6208)" fill="#F2F2F2"></path></svg>
		</a>
		</div>
		'; }
	
		
		echo '
		</div>
		<! --   ???????????????? ????????????????????-->

		<div data-index="0" id="IMView-trigger-0" class="i-trigger">
		<div data-index="0" id="IMView-trigger-button-0" class="IMView-widget-i IMView-close-settings i-trigger-open true  no-tooltip" style="height: 54px; width: 54px;">

		<div class="widget-img"  id="widget-img" style="">

		<div  id = "ico_open" id="IMView-animation-0" class="animation-svg Phone is-animating" style="height: 54px; width: 54px;" >
		<svg class="ico_d"  id = "ico_open-svg" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);">
		<circle class="color-element" cx="19.5" cy="19.5" r="19.5" fill="#26d367"></circle><path d="M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z" transform="translate(9.07179 9.07178)" fill="white"></path>

		</svg>
		</div>
		<div  id = "ico_closed" class="IMView-widget-i IMView-close-settings i-trigger-close " data-title="Hide" style=" height: 54px; width: 54px; display:none;" >
		<div id="IMView-animation-0" class="animation-svg" style="height: 54px; width: 54px;">
		<svg   class="ico_closed" viewBox="0 0 54 54" fill="none"   xmlns="http://www.w3.org/2000/svg">
		<ellipse cx="26" cy="26" rx="26" ry="26" fill="#4F6ACA"></ellipse>		
		<rect width="27.1433" height="3.89857" rx="1.94928" transform="translate(18.35 15.6599) scale(0.998038 1.00196) rotate(45)" fill="white"></rect>
		<rect width="27.1433" height="3.89857" rx="1.94928" transform="translate(37.5056 18.422) scale(0.998038 1.00196) rotate(135)" fill="white"></rect>
		</svg>
		</div>
		</div>

		</div>
		</div>
		</div>
		</div>
		
';
		