<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web Technology style guide</title>
    
    <!-- this is the style guide css file -->
    <link rel="stylesheet" href="global.css">
    <!-- this CSS controls the style guide content template -->
    <style type="text/css">
        body.pattern {
            background: #fff;
            padding: 100px 0;
            margin: 0;
            max-width: none;
        }
        
        .pattern__intro {
            max-width: 1000px;
            margin: 0 auto 2em auto;
            padding: 20px;
        }
        
        .pattern__example {
            clear: both;
            overflow: hidden;
            border-top: 1px solid #ccc;
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .pattern__display {
            width: 65%;
            float: right;
        }
        
        .pattern__source {
            width: 30%;
            float: left;
        }
        
        .pattern__source textarea {
            font-family: monospace;
        }
        
        .pattern__html {
            width: 100%;
            background: #eee;
            border-radius: 0.2em;
            padding: 10px;
            border: 0;
        }
        
        .pattern__colours {
            background: #c30;
            display: flex;
        }
        
        .pattern__swatch {
            flex: 1;
            min-height: 150px;
            padding: 10px;
        }
        
        .pattern__swatch p {
            font-weight: bold;
            margin: 0;
            padding: 0;
        }
        
        .pattern__swatch.swatch--text {
            background: #444;
        }
        
        .pattern__swatch.swatch--link {
            background: #0923D1;
        }
        
        .pattern__swatch.swatch--rule {
            background: #AEB2D1;
        }
        
        .pattern__swatch.swatch--box {
            background: #e3e4ef;
        }
        
        .pattern__swatch.swatch--message {
            background: #f2e9df;
        }
        
        .pattern__swatch.swatch--error {
            background: #CC2E0D;
        }
        
        .pattern__swatch.swatch--success {
            background: #0DB50B;
        }
        
        .pattern__swatch.dark--background {
            color: #fff;
        }
        
        .pattern__explain {
            max-width: 1000px;
            margin: 0 auto;
            padding: 100px 0 10px 0;
            font-weight: bold;
        }
        
        .pattern__explain-label.label--left {
            float: left;
            width: 35%;
        }
        
        .pattern__links {
            padding-top: 5px;
        }
        
        .pattern__links a {
            display: inline-block;
            border-radius: 1em;
            margin-right: 7px;
            padding: 7px 20px;
            background: #eee;
            color: #222;
            text-decoration: none;
        }
    </style>
</head>

<body class="pattern">
    <div class="pattern__intro">
        <h1 class="pattern__heading">Web Tech <span>style guide</span></h1>
        <p>The web tech style guide is a starting point for your projects. You can use it as it is, or &#8216;extend&#8217; it with your own CSS code.</p>
        <p>All the examples below have been built to be responsive, but may require more design and development work depending on the content you want to show in them.</p>
        
    </div>
    <div class="pattern__colours">
        <div class="pattern__swatch swatch--text dark--background">
            <p>Text colour</p>
            <p>#444444</p>
        </div>
        <div class="pattern__swatch swatch--link dark--background">
            <p>Link colour</p>
            <p>#0923D1</p>
        </div>
        <div class="pattern__swatch swatch--rule">
            <p>Border/&#8216;rule&#8217; colour</p>
            <p>#AEB2D1</p>
        </div>
        <div class="pattern__swatch swatch--box">
            <p>Box background</p>
            <p>#e3e4ef</p>
        </div>
        <div class="pattern__swatch swatch--message">
            <p>Message background</p>
            <p>#DBBFA3</p>
        </div>
        <div class="pattern__swatch swatch--error dark--background">
            <p>Error colour</p>
            <p>#CC2E0D</p>
        </div>
        <div class="pattern__swatch swatch--success dark--background">
            <p>Success colour</p>
            <p>#0DB50B</p>
        </div>
    </div>
    <div class="pattern__explain">
        <div class="pattern__explain-label label--left">The HTML here&#8230;</div>
        <div class="pattern__explain-label label--right">will appear like this</div>
    </div>
    <?php
$files = array();
$handle=opendir('patterns');
while (false !== ($file = readdir($handle))):
    if(substr($file, -5) == '.html'):
        $files[] = $file;
    endif;
endwhile;
natsort($files);
foreach ($files as $file):
    echo '<div class="pattern__example">';
    echo '<div class="pattern__display">';
    include('patterns/'.$file);
    echo '</div>';
    echo '<div class="pattern__source">';
    echo '<textarea rows="6" cols="30" class="pattern__html">';
    echo htmlspecialchars(file_get_contents('patterns/'.$file));
    echo '</textarea>';
    echo '<p class="pattern__name"><a class="pattern__link" href="patterns/'.$file.'">'.$file.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>
        <div class="pattern__intro">
            <p>Based on Jeremy Keith&#8217;s <a href="https://adactio.com/journal/5028">Pattern Primer</a>.</p>
        </div>
        
</body>

</html>