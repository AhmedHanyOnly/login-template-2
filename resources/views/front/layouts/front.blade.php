<!DOCTYPE html>
<html lang="en" class="web-browser">
@include('front.layouts.parts.header')

<body style="cursor: default">
    <a href="#" class="access_button">נגישות<img src="./img/negishut.jpg" alt="תפריט נגישות" /></a>
    <div class="access_menu" style="display: none">
        <strong>תפריט נגישות</strong>
        <hr />
        <a
            href="#"
            onclick="ChangeCssMonoChrome('../../ShaamMaster2010/styles/monochrome.css')"
            tabindex="0">שחור לבן</a>
        <hr />
        <a
            href="#"
            onclick="ChangeCssContrast('../../ShaamMaster2010/styles/contrast.css')"
            tabindex="0"
            aria-label="מצב לילה">ניגודיות כהה</a>
        <hr />
        <a
            href="#"
            onclick="ChangeCssStandard('../../ShaamStylesLib/css/styleShaam-2-0-0.css')"
            tabindex="0">תצוגה רגילה</a>
        <hr />
    </div>
    <div class="html-page">
        @include('front.layouts.parts.navbar')


        @yield('content')

        @include('front.layouts.parts.footer')
    </div>

    <div class="theme-highlight-color">
        <div></div>
    </div>
    <style type="text/css">
        .theme-highlight-border-color {
            border-color: rgb(12, 48, 88);
        }

        .theme-highlight-hover-color:hover {
            color: rgb(12, 48, 88);
        }
    </style>
</body>

</html>