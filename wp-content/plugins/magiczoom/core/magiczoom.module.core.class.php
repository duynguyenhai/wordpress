<?php

if(!defined('MagicZoomModuleCoreClassLoaded')) {

    define('MagicZoomModuleCoreClassLoaded', true);

    require_once(dirname(__FILE__) . '/magictoolbox.params.class.php');

    class MagicZoomModuleCoreClass {
        var $uri;
        var $jsPath;
        var $cssPath;
        var $imgPath;
        var $params;
        var $general;//initial parameters
        var $type = 'standard';

        function MagicZoomModuleCoreClass() {
            $this->params = new MagicToolboxParamsClass();
            $this->general = new MagicToolboxParamsClass();
            $this->_paramDefaults();
        }

        function getValue($name) {
            switch($name) {
                case 'name': return 'MagicZoom'; break;
                case 'description': return 'MagicZoom description'; break;
                case 'id': return 'magiczoom'; break;
            }
        }

        function headers($jsPath = '', $cssPath = null, $notCheck = false) {

            //to prevent multiple displaying of headers
            if(!defined('MagicZoomModuleHeaders')) {
                define('MagicZoomModuleHeaders', true);
            } else {
                return '';
            }
            if($cssPath == null) $cssPath = $jsPath;
            $headers = array();
            $headers[] = '<!-- Magic Zoom WordPress module version v5.12.2 [v1.4.12:v4.5.24] -->';
            $headers[] = '<link type="text/css" href="' . $cssPath . '/magiczoom.css" rel="stylesheet" media="screen" />';
            $headers[] = '<script type="text/javascript" src="' . $jsPath . '/magiczoom.js"></script>';
            $headers[] = '<script type="text/javascript" src="' . $jsPath . '/magictoolbox.utils.js"></script>';
            $headers[] = '<script type="text/javascript">MagicZoom.options = {' . implode(',' . "\n", $this->options($notCheck)) . '}</script>';
            return implode("\r\n", $headers);

        }

        function options($notCheck = false) {

            $config = array();

            $config[] = "'opacity': " . $this->params->getValue('opacity');
            $zoomWidth = $this->params->getValue('zoom-width');
            if(strpos($zoomWidth, '%') !== false) $zoomWidth = "'{$zoomWidth}'";
            $config[] = "'zoom-width': " . $zoomWidth;
            $zoomHeight = $this->params->getValue('zoom-height');
            if(strpos($zoomHeight, '%') !== false) $zoomHeight = "'{$zoomHeight}'";
            $config[] = "'zoom-height': " . $zoomHeight;
            $config[] = "'zoom-position': '" . $this->params->getValue('zoom-position') . "'";
            $config[] = "'selectors-change': '" . $this->params->getValue('selectors-change') . "'";
            $config[] = "'smoothing-speed': " . $this->params->getValue('smoothing-speed');
            $config[] = "'zoom-distance': " . $this->params->getValue('zoom-distance');
            $config[] = "'selectors-mouseover-delay': " . $this->params->getValue('selectors-mouseover-delay');
            $config[] = "'zoom-fade-in-speed': " . $this->params->getValue('zoom-fade-in-speed');
            $config[] = "'zoom-fade-out-speed': " . $this->params->getValue('zoom-fade-out-speed');
            //$config[] = "hotspots: " . $this->params->getValue('hotspots');
            $config[] = "'fps': " . $this->params->getValue('fps');
            $config[] = "'loading-msg': '" . $this->params->getValue('loading-msg') . "'";
            $config[] = "'loading-opacity': " . $this->params->getValue('loading-opacity');
            $config[] = "'loading-position-x': " . $this->params->getValue('loading-position-x');
            $config[] = "'loading-position-y': " . $this->params->getValue('loading-position-y');
            $config[] = "'x': " . $this->params->getValue('x');
            $config[] = "'y': " . $this->params->getValue('y');
            if($this->params->checkValue('selectors-effect', 'disable')) {
                $config[] = "'selectors-effect': 'false'";
            } else {
                $config[] = "'selectors-effect': '" . $this->params->getValue('selectors-effect') . "'";
            }
            $config[] = "'selectors-effect-speed': " . $this->params->getValue('selectors-effect-speed');
            if($this->params->checkValue('show-title', 'disable')) {
                $config[] = "'show-title': false";
            } else {
                $config[] = "'show-title': '" . $this->params->getValue('show-title') . "'";
            }
            if($notCheck) {
                $config[] = "'drag-mode': " . $this->params->getValue('drag-mode');
                $config[] = "'always-show-zoom': " . $this->params->getValue('always-show-zoom');
                $config[] = "'smoothing': " . $this->params->getValue('smoothing');
                $config[] = "'opacity-reverse': " . $this->params->getValue('opacity-reverse');
                $config[] = "'click-to-activate': " . $this->params->getValue('click-to-activate');
                $config[] = "'click-to-deactivate': " . $this->params->getValue('click-to-deactivate');
                $config[] = "'preload-selectors-small': " . $this->params->getValue('preload-selectors-small');
                $config[] = "'preload-selectors-big': " . $this->params->getValue('preload-selectors-big');
                $config[] = "'zoom-fade': " . $this->params->getValue('zoom-fade');
                $config[] = "'show-loading': " . $this->params->getValue('show-loading');
                $config[] = "'move-on-click': " . $this->params->getValue('move-on-click');
                $config[] = "'preserve-position': " . $this->params->getValue('preserve-position');
                $config[] = "'fit-zoom-window': " . $this->params->getValue('fit-zoom-window');
                $config[] = "'entire-image': " . $this->params->getValue('entire-image');
                $config[] = "'hint': " . $this->params->getValue('hint');
                $config[] = "'disable-zoom': " . $this->params->getValue('disable-zoom');
                $config[] = "'right-click': " . $this->params->getValue('right-click');
            } else {
                $config[] = "'drag-mode': " . ($this->params->checkValue('drag-mode', 'Yes') ? 'true' : 'false');
                $config[] = "'always-show-zoom': " . ($this->params->checkValue('always-show-zoom', 'Yes') ? 'true' : 'false');
                $config[] = "'smoothing': " . ($this->params->checkValue('smoothing', 'Yes') ? 'true' : 'false');
                $config[] = "'opacity-reverse': " . ($this->params->checkValue('opacity-reverse', 'Yes') ? 'true' : 'false');
                $config[] = "'click-to-activate': " . ($this->params->checkValue('click-to-activate', 'Yes') ? 'true' : 'false');
                $config[] = "'click-to-deactivate': " . ($this->params->checkValue('click-to-deactivate', 'Yes') ? 'true' : 'false');
                $config[] = "'preload-selectors-small': " . ($this->params->checkValue('preload-selectors-small', 'Yes') ? 'true' : 'false');
                $config[] = "'preload-selectors-big': " . ($this->params->checkValue('preload-selectors-big', 'Yes') ? 'true' : 'false');
                $config[] = "'zoom-fade': " . ($this->params->checkValue('zoom-fade', 'Yes') ? 'true' : 'false');
                $config[] = "'show-loading': " . ($this->params->checkValue('show-loading', 'Yes') ? 'true' : 'false');
                $config[] = "'move-on-click': " . ($this->params->checkValue('move-on-click', 'Yes') ? 'true' : 'false');
                $config[] = "'preserve-position': " . ($this->params->checkValue('preserve-position', 'Yes') ? 'true' : 'false');
                $config[] = "'fit-zoom-window': " . ($this->params->checkValue('fit-zoom-window', 'Yes') ? 'true' : 'false');
                $config[] = "'entire-image': " . ($this->params->checkValue('entire-image', 'Yes') ? 'true' : 'false');
                $config[] = "'hint': " . ($this->params->checkValue('hint', 'Yes') ? 'true' : 'false');
                $config[] = "'disable-zoom': " . ($this->params->checkValue('disable-zoom', 'Yes') ? 'true' : 'false');
                $config[] = "'right-click': " . ($this->params->checkValue('right-click', 'Yes') ? 'true' : 'false');
            }
            $config[] = "'zoom-align': '" . $this->params->getValue('zoom-align') . "'";
            $config[] = "'zoom-window-effect': '" . $this->params->getValue('zoom-window-effect') . "'";
            $config[] = "'selectors-class': '" . $this->params->getValue('selectors-class') . "'";
            $config[] = "'hint-text': '" . $this->params->getValue('hint-text') . "'";
            $config[] = "'initialize-on': '" . $this->params->getValue('initialize-on') . "'";
            switch($this->params->getValue('hint-position')) {
                case 'top left':
                    $config[] = "'hint-position': 'tl'";
                    break;
                case 'top right':
                    $config[] = "'hint-position': 'tr'";
                    break;
                case 'top center':
                    $config[] = "'hint-position': 'tc'";
                    break;
                case 'bottom left':
                    $config[] = "'hint-position': 'bl'";
                    break;
                case 'bottom right':
                    $config[] = "'hint-position': 'br'";
                    break;
                case 'bottom center':
                    $config[] = "'hint-position': 'bc'";
                    break;
            }
            $config[] = "'hint-opacity': " . $this->params->getValue('hint-opacity');

            return $config;

        }

        function template($params) {
            extract($params);

            if(!isset($alt) || empty($alt)) {
                $alt = '';
            } else {
                $alt = htmlspecialchars(htmlspecialchars_decode($alt, ENT_QUOTES));
            }
            if(!isset($img) || empty($img)) return false;
            if(!isset($thumb) || empty($thumb)) $thumb = $img;
            if(!isset($id) || empty($id)) $id = md5($img);
            if(!isset($title) || empty($title)) $title = '';
            else {
                $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
                if(empty($alt)) $alt = $title;
                $title = " title=\"{$title}\"";
            }
            if(!isset($width) || empty($width)) $width = "";
            else $width = " width=\"{$width}\"";
            if(!isset($height) || empty($height)) $height = "";
            else $height = " height=\"{$height}\"";
            if($this->params->checkValue('show-message', 'Yes')) {
                $message = '<div class="MagicToolboxMessage">' . $this->params->getValue('message') . '</div>';
            } else $message = '';

            $tap = '';
            if(!isset($link) || empty($link)) {
                $link = '';
            } else {
                $link = ' onclick="document.location.href=\'' . ($link) . '\'"';
                $tap = "<script>\$mjs('MagicZoomImage{$id}').je1('touchstart', onMagicTap); \$mjs('MagicZoomImage{$id}').je1('touchend', onMagicTap);</script>";
            }
            //$rel = $this->getRel();
            if (isset($rel) && !empty($rel)) {
                $rel .= $this->getRel();
            } else {
                $rel = $this->getRel();
            }
            if(!empty($rel)) $rel = 'rel="'.$rel.'"';

            return "<a{$link} class=\"MagicZoom\"{$title} id=\"MagicZoomImage{$id}\" href=\"{$img}\" {$rel}><img itemprop=\"image\"{$width}{$height} src=\"{$thumb}\" alt=\"{$alt}\" /></a><br />{$message}{$tap}";
        }

        function subTemplate($params) {
            extract($params);

            if(!isset($alt) || empty($alt)) {
                $alt = '';
            } else {
                $alt = htmlspecialchars(htmlspecialchars_decode($alt, ENT_QUOTES));
            }
            if(!isset($img) || empty($img)) return false;
            if(!isset($medium) || empty($medium)) $medium = $img;
            if(!isset($thumb) || empty($thumb)) $thumb = $img;
            if(!isset($id) || empty($id)) $id = md5($img);
            if(!isset($title) || empty($title)) $title = '';
            else {
                $title = htmlspecialchars(htmlspecialchars_decode($title, ENT_QUOTES));
                if(empty($alt)) $alt = $title;
                $title = " title=\"{$title}\"";
            }
            if(!isset($width) || empty($width)) $width = "";
            else $width = " width=\"{$width}\"";
            if(!isset($height) || empty($height)) $height = "";
            else $height = " height=\"{$height}\"";

            //$rel = $this->getRel();
            if (isset($rel) && !empty($rel)) {
	      $rel .= $this->getRel();
	    } else {
	      $rel = $this->getRel();
	    }
            return "<a{$title} href=\"{$img}\" rel=\"zoom-id: MagicZoomImage{$id};{$rel}\" rev=\"{$medium}\"><img{$width}{$height} src=\"{$thumb}\" alt=\"{$alt}\" /></a>";
        }

        function addonsTemplate($imgPath = '') {
            /*if ($this->params->checkValue("loading-animation", "Yes")){
                return '<img style="display:none;" class="MagicZoomLoading" src="' . $imgPath . '/' . $this->params->getValue("loading-image") . '" alt="' . $this->params->getValue("loading-text") . '"/>';
            } else return '';*/
             /* if ($this->params->checkValue("show-loading", "Yes")){
                      return '<img style="display:none;" class="MagicZoomLoading" src="' . $imgPath . '/' . $this->params->getValue("loading-image") . '" alt="' . $this->params->getValue("loading-text") . '"/>';
              } else return '';*/
        }

        function getRel() {
            if(defined('MagicToolboxOptionsLoaded')) {
                return $this->params->serialize() . ';';
            }
            $rel = array();
            if(count($this->general->params)) {
                foreach($this->general->params as $name => $param) {
                    if($this->params->checkValue($name, $param['value'])) continue;
                    switch($name) {
                        case 'opacity':
                            $rel[] = 'opacity: ' . $this->params->getValue('opacity');
                            break;
                        case 'opacity':
                            $rel[] = 'opacity: ' . $this->params->getValue('opacity');
                            break;
                        case 'zoom-width':
                            $rel[] = 'zoom-width: ' . $this->params->getValue('zoom-width');
                            break;
                        case 'zoom-height':
                            $rel[] = 'zoom-height: ' . $this->params->getValue('zoom-height');
                            break;
                        case 'zoom-position':
                            $rel[] = 'zoom-position: ' . $this->params->getValue('zoom-position');
                            break;
                        case 'selectors-change':
                            $rel[] = 'selectors-change: ' . $this->params->getValue('selectors-change');
                            break;
                        case 'smoothing-speed':
                            $rel[] = 'smoothing-speed: ' . $this->params->getValue('smoothing-speed');
                            break;
                        case 'zoom-distance':
                            $rel[] = 'zoom-distance: ' . $this->params->getValue('zoom-distance');
                            break;
                        case 'selectors-mouseover-delay':
                            $rel[] = 'selectors-mouseover-delay: ' . $this->params->getValue('selectors-mouseover-delay');
                            break;
                        case 'zoom-fade-in-speed':
                            $rel[] = 'zoom-fade-in-speed: ' . $this->params->getValue('zoom-fade-in-speed');
                            break;
                        case 'zoom-fade-out-speed':
                            $rel[] = 'zoom-fade-out-speed: ' . $this->params->getValue('zoom-fade-out-speed');
                            break;
                        case 'fps':
                            $rel[] = 'fps: ' . $this->params->getValue('fps');
                            break;
                        case 'loading-msg':
                            $rel[] = 'loading-msg: ' . $this->params->getValue('loading-msg');
                            break;
                        case 'loading-opacity':
                            $rel[] = 'loading-opacity: ' . $this->params->getValue('loading-opacity');
                            break;
                        case 'loading-position-x':
                            $rel[] = 'loading-position-x: ' . $this->params->getValue('loading-position-x');
                            break;
                        case 'loading-position-y':
                            $rel[] = 'loading-position-y: ' . $this->params->getValue('loading-position-y');
                            break;
                        case 'x':
                            $rel[] = 'x: ' . $this->params->getValue('x');
                            break;
                        case 'y':
                            $rel[] = 'y: ' . $this->params->getValue('y');
                            break;
                        case 'selectors-effect':
                            if($this->params->checkValue('selectors-effect', 'disable')) {
                                $rel[] = 'selectors-effect: false';
                            } else {
                                $rel[] = 'selectors-effect: ' . $this->params->getValue('selectors-effect');
                            }
                            break;
                        case 'selectors-effect-speed':
                            $rel[] = 'selectors-effect-speed: ' . $this->params->getValue('selectors-effect-speed');
                            break;
                        case 'show-title':
                            if($this->params->checkValue('show-title', 'disable')) {
                                $rel[] = 'show-title: false';
                            } else {
                                $rel[] = 'show-title: ' . $this->params->getValue('show-title');
                            }
                            break;
                        case 'drag-mode':
                            $rel[] = 'drag-mode: ' . ($this->params->checkValue('drag-mode', 'Yes') ? 'true' : 'false');
                            break;
                        case 'always-show-zoom':
                            $rel[] = 'always-show-zoom: ' . ($this->params->checkValue('always-show-zoom', 'Yes') ? 'true' : 'false');
                            break;
                        case 'smoothing':
                            $rel[] = 'smoothing: ' . ($this->params->checkValue('smoothing', 'Yes') ? 'true' : 'false');
                            break;
                        case 'opacity-reverse':
                            $rel[] = 'opacity-reverse: ' . ($this->params->checkValue('opacity-reverse', 'Yes') ? 'true' : 'false');
                            break;
                        case 'click-to-activate':
                            $rel[] = 'click-to-activate: ' . ($this->params->checkValue('click-to-activate', 'Yes') ? 'true' : 'false');
                            break;
                        case 'click-to-deactivate':
                            $rel[] = 'click-to-deactivate: ' . ($this->params->checkValue('click-to-deactivate', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preload-selectors-small':
                            $rel[] = 'preload-selectors-small: ' . ($this->params->checkValue('preload-selectors-small', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preload-selectors-big':
                            $rel[] = 'preload-selectors-big: ' . ($this->params->checkValue('preload-selectors-big', 'Yes') ? 'true' : 'false');
                            break;
                        case 'zoom-fade':
                            $rel[] = 'zoom-fade: ' . ($this->params->checkValue('zoom-fade', 'Yes') ? 'true' : 'false');
                            break;
                        case 'show-loading':
                            $rel[] = 'show-loading: ' . ($this->params->checkValue('show-loading', 'Yes') ? 'true' : 'false');
                            break;
                        case 'move-on-click':
                            $rel[] = 'move-on-click: ' . ($this->params->checkValue('move-on-click', 'Yes') ? 'true' : 'false');
                            break;
                        case 'preserve-position':
                            $rel[] = 'preserve-position: ' . ($this->params->checkValue('preserve-position', 'Yes') ? 'true' : 'false');
                            break;
                        case 'fit-zoom-window':
                            $rel[] = 'fit-zoom-window: ' . ($this->params->checkValue('fit-zoom-window', 'Yes') ? 'true' : 'false');
                            break;
                        case 'entire-image':
                            $rel[] = 'entire-image: ' . ($this->params->checkValue('entire-image', 'Yes') ? 'true' : 'false');
                            break;
                        case 'zoom-align':
                            $rel[] = 'zoom-align: ' . $this->params->getValue('zoom-align');
                            break;
                        case 'zoom-window-effect':
                            $rel[] = 'zoom-window-effect: ' . $this->params->getValue('zoom-window-effect');
                            break;
                        case 'selectors-class':
                            $rel[] = 'selectors-class: ' . $this->params->getValue('selectors-class');
                            break;
                        case 'hint':
                            $rel[] = 'hint: ' . ($this->params->checkValue('hint', 'Yes') ? 'true' : 'false');
                            break;
                        case 'hint-text':
                            $rel[] = 'hint-text: ' . $this->params->getValue('hint-text');
                            break;
                        case 'hint-position':
                            switch($this->params->getValue('hint-position')) {
                                case 'top left':
                                    $rel[] = 'hint-position: tl';
                                    break;
                                case 'top right':
                                    $rel[] = 'hint-position: tr';
                                    break;
                                case 'top center':
                                    $rel[] = 'hint-position: tc';
                                    break;
                                case 'bottom left':
                                    $rel[] = 'hint-position: bl';
                                    break;
                                case 'bottom right':
                                    $rel[] = 'hint-position: br';
                                    break;
                                case 'bottom center':
                                    $rel[] = 'hint-position: bc';
                                    break;
                            }
                            break;
                        case 'hint-opacity':
                            $rel[] = 'hint-opacity: ' . $this->params->getValue('hint-opacity');
                            break;
                        case 'disable-zoom':
                            $rel[] = 'disable-zoom: ' . ($this->params->checkValue('disable-zoom', 'Yes')?'true':'false');
                            break;
                        case 'right-click':
                            $rel[] = 'right-click: ' . ($this->params->checkValue('right-click', 'Yes')?'true':'false');
                            break;
                        case 'initialize-on':
                            $rel[] = 'initialize-on: ' . $this->params->getValue('initialize-on');
                            break;

                    }
                }
            }
            if(count($rel)) {
                $rel = implode(';',$rel) . ';';
            } else {
                $rel = '';
            }
            return $rel;
        }

        function _paramDefaults() {
            $params = array("zoom-width"=>array("id"=>"zoom-width","group"=>"Positioning and Geometry","order"=>"140","default"=>"300","label"=>"Zoomed area width (in pixels or percent)","type"=>"text","scope"=>"tool"),"zoom-height"=>array("id"=>"zoom-height","group"=>"Positioning and Geometry","order"=>"150","default"=>"300","label"=>"Zoomed area height (in pixels or percent)","type"=>"text","scope"=>"tool"),"zoom-position"=>array("id"=>"zoom-position","group"=>"Positioning and Geometry","order"=>"160","default"=>"right","label"=>"Zoomed area position","type"=>"array","subType"=>"select","values"=>array("top","right","bottom","left","inner"),"scope"=>"tool"),"zoom-align"=>array("id"=>"zoom-align","group"=>"Positioning and Geometry","order"=>"161","default"=>"top","label"=>"How to align zoom window to an image","type"=>"array","subType"=>"select","values"=>array("right","left","top","bottom","center"),"scope"=>"tool"),"zoom-distance"=>array("id"=>"zoom-distance","group"=>"Positioning and Geometry","order"=>"170","default"=>"15","label"=>"Distance between small image and zoom window (in pixels)","type"=>"num","scope"=>"tool"),"opacity"=>array("id"=>"opacity","group"=>"Effects","order"=>"270","default"=>"50","label"=>"Square opacity","type"=>"num","scope"=>"tool"),"opacity-reverse"=>array("id"=>"opacity-reverse","group"=>"Effects","order"=>"280","default"=>"No","label"=>"Add opacity to background instead of hovered area","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-fade"=>array("id"=>"zoom-fade","group"=>"Effects","order"=>"290","default"=>"Yes","label"=>"Zoom window fade effect","type"=>"array","subType"=>"select","values"=>array("Yes","No"),"scope"=>"tool"),"zoom-window-effect"=>array("id"=>"zoom-window-effect","group"=>"Effects","order"=>"291","default"=>"shadow","label"=>"Apply shadow or glow on a zoom window","type"=>"array","subType"=>"select","values"=>array("shadow","glow","false"),"scope"=>"tool"),"zoom-fade-in-speed"=>array("id"=>"zoom-fade-in-speed","group"=>"Effects","order"=>"300","default"=>"200","label"=>"Zoom window fade-in speed (in milliseconds)","type"=>"num","scope"=>"tool"),"zoom-fade-out-speed"=>array("id"=>"zoom-fade-out-speed","group"=>"Effects","order"=>"310","default"=>"200","label"=>"Zoom window fade-out speed  (in milliseconds)","type"=>"num","scope"=>"tool"),"fps"=>array("id"=>"fps","group"=>"Effects","order"=>"320","default"=>"25","label"=>"Frames per second for zoom effect","type"=>"num","scope"=>"tool"),"smoothing"=>array("id"=>"smoothing","group"=>"Effects","order"=>"330","default"=>"Yes","label"=>"Enable smooth zoom movement","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"smoothing-speed"=>array("id"=>"smoothing-speed","group"=>"Effects","order"=>"340","default"=>"40","label"=>"Speed of smoothing (1-99)","type"=>"num","scope"=>"tool"),"selectors-change"=>array("id"=>"selectors-change","group"=>"Multiple images","order"=>"110","default"=>"click","label"=>"Method to switch between multiple images","type"=>"array","subType"=>"select","values"=>array("click","mouseover"),"scope"=>"tool"),"selectors-class"=>array("id"=>"selectors-class","group"=>"Multiple images","order"=>"111","default"=>"","label"=>"Define a CSS class of the active selector","type"=>"text","scope"=>"tool"),"preload-selectors-small"=>array("id"=>"preload-selectors-small","group"=>"Multiple images","order"=>"120","default"=>"Yes","label"=>"Multiple images, preload small images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"preload-selectors-big"=>array("id"=>"preload-selectors-big","group"=>"Multiple images","order"=>"130","default"=>"No","label"=>"Multiple images, preload large images","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"selectors-effect"=>array("id"=>"selectors-effect","group"=>"Multiple images","order"=>"140","default"=>"fade","label"=>"Dissolve or cross fade thumbnail when switching thumbnails","type"=>"array","subType"=>"select","values"=>array("dissolve","fade","pounce","disable"),"scope"=>"tool"),"selectors-effect-speed"=>array("id"=>"selectors-effect-speed","group"=>"Multiple images","order"=>"150","default"=>"400","label"=>"Selectors effect speed, ms","type"=>"num","scope"=>"tool"),"selectors-mouseover-delay"=>array("id"=>"selectors-mouseover-delay","group"=>"Multiple images","order"=>"160","default"=>"60","label"=>"Multiple images delay in ms before switching thumbnails","type"=>"num","scope"=>"tool"),"initialize-on"=>array("id"=>"initialize-on","group"=>"Initialization","order"=>"70","default"=>"load","label"=>"How to initialize Magic Zoom and download large image","type"=>"array","subType"=>"radio","values"=>array("load","click","mouseover"),"scope"=>"tool"),"click-to-activate"=>array("id"=>"click-to-activate","group"=>"Initialization","order"=>"80","default"=>"No","label"=>"Click to show the zoom","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"click-to-deactivate"=>array("id"=>"click-to-deactivate","group"=>"Initialization","order"=>"81","default"=>"No","label"=>"Allow click to hide the zoom window","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-loading"=>array("id"=>"show-loading","group"=>"Initialization","order"=>"90","default"=>"Yes","label"=>"Loading message","type"=>"array","subType"=>"select","values"=>array("Yes","No"),"scope"=>"tool"),"loading-msg"=>array("id"=>"loading-msg","group"=>"Initialization","order"=>"100","default"=>"Loading zoom...","label"=>"Loading message text","type"=>"text","scope"=>"tool"),"loading-opacity"=>array("id"=>"loading-opacity","group"=>"Initialization","order"=>"110","default"=>"75","label"=>"Loading message opacity (0-100)","type"=>"num","scope"=>"tool"),"loading-position-x"=>array("id"=>"loading-position-x","group"=>"Initialization","order"=>"120","default"=>"-1","label"=>"Loading message X-axis position, -1 is center","type"=>"num","scope"=>"tool"),"loading-position-y"=>array("id"=>"loading-position-y","group"=>"Initialization","order"=>"130","default"=>"-1","label"=>"Loading message Y-axis position, -1 is center","type"=>"num","scope"=>"tool"),"entire-image"=>array("id"=>"entire-image","group"=>"Initialization","order"=>"140","default"=>"No","label"=>"Show entire large image on hover","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"show-title"=>array("id"=>"show-title","group"=>"Title and Caption","order"=>"10","default"=>"top","label"=>"Show the title of the image in the zoom window","type"=>"array","subType"=>"select","values"=>array("top","bottom","disable"),"scope"=>"tool"),"class"=>array("id"=>"class","group"=>"Miscellaneous","order"=>"20","default"=>"MagicZoom","label"=>"Class Name","type"=>"array","subType"=>"select","values"=>array("all","MagicZoom")),"nextgen-gallery"=>array("id"=>"nextgen-gallery","group"=>"Miscellaneous","order"=>"24","default"=>"No","label"=>"Apply effect to NextGen gallery images","type"=>"array","subType"=>"select","values"=>array("Yes","No")),"show-message"=>array("id"=>"show-message","group"=>"Miscellaneous","order"=>"370","default"=>"Yes","label"=>"Show message under image?","type"=>"array","subType"=>"radio","values"=>array("Yes","No")),"message"=>array("id"=>"message","group"=>"Miscellaneous","order"=>"380","default"=>"Move your mouse over image","label"=>"Message under images","type"=>"text"),"right-click"=>array("id"=>"right-click","group"=>"Miscellaneous","order"=>"385","default"=>"No","label"=>"Show right-click menu on the image","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"disable-zoom"=>array("id"=>"disable-zoom","group"=>"Zoom mode","order"=>"9","default"=>"No","label"=>"Disable the zoom effect (e.g. to swap images only)","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"always-show-zoom"=>array("id"=>"always-show-zoom","group"=>"Zoom mode","order"=>"10","default"=>"No","label"=>"Always show zoom?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"drag-mode"=>array("id"=>"drag-mode","group"=>"Zoom mode","order"=>"20","default"=>"No","label"=>"Use drag mode?","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"move-on-click"=>array("id"=>"move-on-click","group"=>"Zoom mode","order"=>"30","default"=>"Yes","label"=>"Click alone will also move zoom (drag mode only)","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"x"=>array("id"=>"x","group"=>"Zoom mode","order"=>"40","default"=>"-1","label"=>"Initial zoom X-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"y"=>array("id"=>"y","group"=>"Zoom mode","order"=>"50","default"=>"-1","label"=>"Initial zoom Y-axis position for drag mode, -1 is center","type"=>"num","scope"=>"tool"),"preserve-position"=>array("id"=>"preserve-position","group"=>"Zoom mode","order"=>"60","default"=>"No","label"=>"Position of zoom can be remembered for multiple images and drag mode","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"fit-zoom-window"=>array("id"=>"fit-zoom-window","group"=>"Zoom mode","order"=>"70","default"=>"Yes","label"=>"Resize zoom window if big image is smaller than zoom window","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"hint"=>array("id"=>"hint","group"=>"Hint","order"=>"10","default"=>"Yes","label"=>"Display a hint to suggest that image is zoomable","type"=>"array","subType"=>"radio","values"=>array("Yes","No"),"scope"=>"tool"),"hint-text"=>array("id"=>"hint-text","group"=>"Hint","order"=>"15","default"=>"Zoom","label"=>"Show text in the hint","type"=>"text","scope"=>"tool"),"hint-position"=>array("id"=>"hint-position","group"=>"Hint","order"=>"20","default"=>"top left","label"=>"Position of the hint","type"=>"array","subType"=>"select","values"=>array("top left","top right","top center","bottom left","bottom right","bottom center"),"scope"=>"tool"),"hint-opacity"=>array("id"=>"hint-opacity","group"=>"Hint","order"=>"25","default"=>"75","label"=>"Opacity of the hint (0-100)","type"=>"num","scope"=>"tool"));
            $this->params->appendArray($params);
        }
    }

}
?>
