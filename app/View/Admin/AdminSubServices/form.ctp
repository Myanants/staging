<!-- <!doctype html>
<head>
	<meta charset="utf-8">
	<title>HTML5 Drag &amp; Swap Zepto Plugin</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
	<style>
	header, section {
		display: block;
	}
	body {
		font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
	}
	h1, h2 {
		text-align: center;
		font-weight: normal;
	}
	section {
		margin: auto;
		width: 620px;
	}
	a, a:link, a:visited {
		color: #ff3399;
		text-decoration: none;
	}
	a:hover {
		text-decoration: underline;
	}
	.sortable {
		margin: auto;
		padding: 0;
		width: 310px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	.sortable.grid {
		overflow: hidden;
	}
	li {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
		-webkit-transition: all 0.2s ease;
		-moz-transition: all 0.2s ease;
		-o-transition: all 0.2s ease;
		-ms-transition: all 0.2s ease;
		transition: all 0.2s ease;
		list-style: none;
		border-radius: 4px;
		margin: 5px;
		padding: 5px;
		height: 22px;
	}
	li:hover {
		cursor: move;
	}
	.sortable li {
		border: 1px solid #d97815;
		background: #ff9933;
		color: #fff;
		text-shadow: 0 1px 1px #ac4e00;
		box-shadow: inset 0 1px 1px rgba(255,255,255,0.7);
	}
	.grid li {
		line-height: 80px;
		float: left;
		width: 80px;
		height: 80px;
		text-align: center;
	}
	.funcs li {
		border: 1px solid #eee;
	}
	#features li {
		background: none;
		border: none;
		color: black;
	}
	h2 span {
		color: #ff3399;
	}
	.disabled {
		opacity: 0.5;
	}
    
    .sortable_exclude_dynamic {
		margin: auto;
		padding: 0;
		width: 310px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
    .sortable_exclude_dynamic li {
		border: 1px solid #d97815;
		background: #ff9933;
		color: #fff;
		text-shadow: 0 1px 1px #ac4e00;
		box-shadow: inset 0 1px 1px rgba(255,255,255,0.7);
	} 
        
    .sortable_exclude_dynamic li.correct {
		border:1px solid #000000;
        background:#cccccc;     
            cursor:default;
	}  
    .sortable_exclude_dynamic li.empty{
        border:none;
        background:none;
        color:#dcdcdc;
            cursor:default;
    }
        
	.over {
		-webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
		box-shadow: 0 5px 10px rgba(0,0,0,0.2);

		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-o-transform: scale(1.1);
		-ms-transform: scale(1.1);
		transform: scale(1.1);
	}

	.moving {
		-webkit-transform: scale(0.9);
		-moz-transform: scale(0.9);
		-o-transform: scale(0.9);
		-ms-transform: scale(0.9);
		transform: scale(0.9);
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
		filter: alpha(opacity=30);
		opacity: 0.3;
	}

	.drop {
		-webkit-animation: drop 1s ease;
		-moz-animation: drop 1s ease;
		-ms-animation: drop 1s ease;
		-o-animation: drop 1s ease;
		animation: drop 1s ease;
	}

	@keyframes "drop" {
		0%, 100% {
			background: #FF9933;
			color: #fff;
		}
		50% {
			color: #FF9933;
			background: #fff;
		}

	}

	@-moz-keyframes drop {
		0%, 100% {
			background: #FF9933;
			color: #fff;
		}
		50% {
			color: #FF9933;
			background: #fff;
		}

	}

	@-webkit-keyframes "drop" {
		0%, 100% {
			background: #FF9933;
			color: #fff;
		}
		50% {
			color: #FF9933;
			background: #fff;
		}

	}

	@-ms-keyframes "drop" {
		0%, 100% {
			background: #FF9933;
			color: #fff;
		}
		50% {
			color: #FF9933;
			background: #fff;
		}

	}

	@-o-keyframes "drop" {
		0%, 100% {
			background: #FF9933;
			color: #fff;
		}
		50% {
			color: #FF9933;
			background: #fff;
		}

	}
	</style>
</head>

<body>
	<header>
		<h1>HTML5 Drag &amp; Swap Zepto Plugin</h1>
		<h2><a href="https://github.com/james2doyle/zepto-dragswap/">View On Github</a></h2>
	</header>
	<section>
		<h2>Features</h2>
		<ul id="features">
			<li>2KB (minified).</li>
			<li>Built using native HTML5 drag and drop API.</li>
			<li>Supports both list and grid style layouts.</li>
			<li>Add drop animations with CSS3.</li>
			<li>Class control for move, over, drop and exclude.</li>
			<li>Vender prefix getter for detecting animation end.</li>
			<li>Works in IE 7+, Firefox 16+, Chrome 23+, Safari 5.1+ and, Opera 12.1+.</li>
		</ul>
	</section>
	<section>
		<h2>Sortable List</h2>
		<ul class="sortable list">
			<li id="item1">Item 1</li>
			<li id="item2">Item 2</li>
			<li id="item3">Item 3</li>
			<li id="item4">Item 4</li>
			<li id="item5">Item 5</li>
			<li id="item6">Item 6</li>
		</ul>
	</section>
	<section>
		<h2>Sortable Grid</h2>
		<ul class="sortable grid">
			<li id="item1">Item 1</li>
			<li id="item2">Item 2</li>
			<li id="item3">Item 3</li>
			<li id="item4">Item 4</li>
			<li id="item5">Item 5</li>
			<li id="item6">Item 6</li>
		</ul>
	</section>
	<section>
		<h2>Exclude Items</h2>
		<ul class="sortable list">
            <li id="item1">Item 1</li>
            <li id="item2">Item 2</li>
            <li id="item3" class="disabled">Item 3</li>
            <li id="item4">Item 4</li>
            <li id="item5" class="disabled">Item 5</li>
            <li id="item6" class="disabled">Item 6</li>
		</ul>
	</section>
    <section>
		<h2>Dynamic Exclude Items</h2>
		<ul class="sortable_exclude_dynamic list">
  
		</ul>
	</section>
	<section>
		<h2>Functions <em>toArray</em> <span id="arrayResults"></span></h2>
		<h2><em>toJSON</em> <span id="jsonResults"></span></h2>
		<ul class="funcs">
			<li id="item1">Item 1</li>
			<li id="item2">Item 2</li>
			<li id="item3">Item 3</li>
			<li id="item4">Item 4</li>
		</ul>
	</section>
	<section>
		<h2>Resources</h2>
			<ul>
				<li><a href="http://www.html5rocks.com/en/tutorials/dnd/basics/">HTML5 Rocks Tutorial</a></li>
				<li><a href="https://github.com/zakj/html5sortable">zakj/html5sortable</a></li>
				<li><a href="https://github.com/zenorocha/jquery-plugin-patterns">jquery.extend-skeleton.js</a></li>
			</ul>
	</section>
	<script src="zepto.min.js"></script>
	<script src="zepto.dragswap.js"></script>
	<script>
	$(function() {
        
        $('.sortable_exclude_dynamic').dragswap({
            element : 'li',
			dropAnimation: true,
            exclude : ['.correct', '.empty']
		});  
		
        $('.sortable_exclude_dynamic').append(
            '<li id="item1">Item 1</li>'
			+'<li id="item2">Item 2</li>'
			+'<li id="item3" class="correct">Item 3</li>'
            +'<li id="item4">Item 4</li>'                                  
			+'<li id="item5" class="empty"></li>'
			+'<li id="item6" class="correct">Item 6</li>'
			+'<li id="item7" class="correct">Item 7</li>');
        
        $('.sortable').dragswap({
            element : 'li',
			dropAnimation: true  
		});
        
		$('.funcs').dragswap({
			dropAnimation: false,
			dropComplete: function() {
				var sortArray = $('.funcs').dragswap('toArray');
				$('#arrayResults').html('['+sortArray.join(',')+']');
				var sortJSON = $('.funcs').dragswap('toJSON');
				$('#jsonResults').html(sortJSON);
			}
		});
	});
	</script>
</body>
</html>
 -->