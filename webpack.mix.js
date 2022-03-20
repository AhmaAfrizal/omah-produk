const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css');

// custom css js backend atau admin
mix.styles([
		'resources/css/backend/nucleo-icons.css',
		'resources/css/backend/nucleo-svg.css',
		'resources/css/backend/argon-dashboard.css'
	],'public/5mhuwAcA/css/app-back.css');
mix.scripts([
		'resources/js/backend/perfect-scrollbar.js'
	],'public/5mhuwAcA/js/perfect-scrollbar.js')
	.scripts([
		'resources/js/backend/smooth-scrollbar.js'
	],'public/5mhuwAcA/js/smooth-scrollbar.js')
	.scripts([
		'resources/js/backend/chartjs.js'
	],'public/5mhuwAcA/js/chartjs.js')
	.scripts([
		'resources/js/backend/argon-dashboard.js'
	],'public/5mhuwAcA/js/app-back.js')

	.copy('resources/fonts','public/5mhuwAcA/fonts')
	.copy('resources/img','public/5mhuwAcA/img');