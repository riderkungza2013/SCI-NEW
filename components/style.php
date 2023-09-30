<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sci</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<link rel="stylesheet" href="./style.css">
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>

<style>
    html {
        box-sizing: border-box
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit
    }

    * {
        margin: 0;
        padding: 0;
        outline: 0;
        -webkit-overflow-scrolling: touch
    }

    img,
    video,
    audio {
        max-width: 100%;
    }

    img,
    video {
        height: auto;

    }

    svg {
        max-height: 100%
    }

    iframe {
        border: none
    }

    ::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    footer {
        background-color: #f4f4f4
    }

    html,
    body {
        font-size: 16px;
        line-height: 24px
    }


    body {
        font-family: "Leelawadee", "-apple-system", "Garuda", sans-serif;
        color: #313439;
        background-color: #f4f4f4
    }

    a {
        color: #3794de
    }

    a:hover {
        color: #f03c69
    }

    h1.title,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        font-weight: bold;
        color: #0d0d0e;
        text-rendering: optimizeLegibility;
        margin-bottom: 16px
    }


    h1.title {
        font-size: 60px;
        line-height: 64px;
        margin-bottom: 8px
    }

    h1,
    .h1 {
        font-size: 48px;
        line-height: 52px
    }

    h2,
    .h2 {
        font-size: 36px;
        line-height: 40px
    }

    h3,
    .h3 {
        font-size: 24px;
        line-height: 32px;
        color: #1c86f2
    }

    h4,
    .h4 {
        font-size: 21px;
        line-height: 32px
    }

    h5,
    .h5 {
        font-size: 18px;
        line-height: 28px
    }

    h6,
    .h5 {
        font-size: 16px;
        line-height: 28px;
        color: #1c86f2
    }

    .tx1 {
        margin-top: 32px;
        font-size: 24px;
        color: #1c86f2;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        text-rendering: optimizeLegibility;


    }

    .tx2 {
        font-size: 24px;
        color: #1c86f2;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        text-rendering: optimizeLegibility;


    }


    ol ol li {
        list-style-type: lower-alpha
    }

    ol ol ol li {
        list-style-type: lower-roman
    }

    nav ul,
    nav ol {
        margin: 0;
        list-style: none
    }

    nav ul ul,
    nav ul ol,
    nav ol ul,
    nav ol ol {
        margin-left: 24px
    }

    dd {
        margin-left: 24px
    }

    p,
    blockquote,
    hr,
    pre,
    ol,
    ul,
    dl,
    table,
    fieldset,
    figure,
    address,
    form {
        margin-bottom: 16px
    }

    th {
        text-align: left;
        font-weight: 700;
        vertical-align: bottom
    }

    td {
        vertical-align: top
    }

    tr.align-middle td,
    td.align-middle {
        vertical-align: middle
    }

    th,
    td {
        padding: 1rem 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05)
    }

    th:first-child,
    td:first-child {
        padding-left: 0
    }

    th:last-child,
    td:last-child {
        padding-right: 0
    }


    @font-face {
        font-family: 'Kube';
        src: url("data:application/x-font-ttf;charset=utf-8;base64,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") format("truetype");
        font-weight: normal;
        font-style: normal
    }

    .align-middle {
        align-items: center
    }

    .align-right {
        justify-content: flex-end
    }

    .align-center {
        justify-content: center
    }

    .w20 {
        width: 20%
    }

    .video-container {
        height: 0;
        padding-bottom: 56.25%;
        position: relative;
        margin-bottom: 16px
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important
    }

    .close {
        display: inline-block;
        min-height: 16px;
        min-width: 16px;
        line-height: 16px;
        vertical-align: middle;
        text-align: center;
        font-size: 12px;
        opacity: .6
    }

    .right-aligned {
        float: right;
        margin-left: 10px;

    }

    .youtube-icon {
        color: red;
    }

    .center-text {
        text-align: center;
    }

    .card {
        --bs-card-spacer-y: 1.25rem;
        --bs-card-spacer-x: 1.25rem;
        --bs-card-title-spacer-y: 0.5rem;
        --bs-card-title-color: var(--bs-gray-900);
        --bs-card-subtitle-color: ;
        --bs-card-border-width: 0;
        --bs-card-border-color: var(--bs-border-color);
        --bs-card-border-radius: 1rem;
        --bs-card-box-shadow: ;
        --bs-card-inner-border-radius: 1rem;
        --bs-card-cap-padding-y: 1.25rem;
        --bs-card-cap-padding-x: 1.25rem;
        --bs-card-cap-bg: var(--bs-mode);
        --bs-card-cap-color: ;
        --bs-card-height: ;
        --bs-card-color: ;
        --bs-card-bg: var(--bs-mode);
        --bs-card-img-overlay-padding: 1.25rem;
        --bs-card-group-margin: 0.9375rem;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        height: var(--bs-card-height);
        word-wrap: break-word;
        background-color: var(--bs-card-bg);
        background-clip: border-box;
        border: var(--bs-card-border-width) solid var(--bs-card-border-color);
        border-radius: var(--bs-card-border-radius);

    }

    .card-body {
        font-size: 18px;
        font-weight: 500;
    }

    .custom-img {
        width: 35%;
        height: auto;

    }

    .card-text {
        color: dimgray;
    }

    .card-title2 {

        font-size: calc(1.355rem + 1.26vw);
    }

    .card-title {
        margin-bottom: var(--bs-card-title-spacer-y);
        color: var(--bs-card-title-color);
        font-size: calc(1.255rem + 0.06vw);
    }

    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .popup-content {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        width: auto;

        height: auto;

    }

    .popup-image {
        max-width: 100%;

        max-height: 80vh;

    }

    .close-button {
        background-color: #f44336;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 10px;
    }

    .close-button:hover {
        background-color: #d32f2f;
    }

    .divider {
        border-bottom: 1px solid #0d0d0e;
        width: 100%;

    }

    .navbar {
        transition: all 0.5s ease-in-out;
    }

    .navbar:hover {
        background-color: #333;
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        margin-left: 20px;
    }

    .navbar-nav .nav-link {
        font-size: 18px;
        margin-right: 20px;
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }

    .img-effect:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
        filter: sepia(100%);
    }

    .img-effect {
        transition: transform 0.3s ease;
    }

    .img-thumbnail.rounded-circle.img-effect:hover {
        box-shadow: 0 0 15px 5px gold;
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .img-thumbnail.rounded-circle.img-effect {
        transition: transform 0.3s ease;
    }

    .nav-link-effect:hover {
        transform: translateY(-3px);
        transition: transform 2s ease;
        text-shadow: 0 0 10px gold;

        transition: text-shadow 1s ease;
    }

    body.dark {
        background-color: #292c35;
    }

    /* #9b59b6 */

    body.dark,
    body.dark .support a {
        color: #0d0d0e;
    }

    .checkbox {
        opacity: 0;
        position: absolute;
    }

    .checkbox-label {
        background-color: #111;
        width: 50px;
        height: 26px;
        border-radius: 50px;
        position: relative;
        padding: 5px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .fa-moon {
        color: #f1c40f;
    }

    .fa-sun {
        color: #f39c12;
    }

    .checkbox-label .ball {
        background-color: #fff;
        width: 22px;
        height: 22px;
        position: absolute;
        left: 2px;
        top: 2px;
        border-radius: 50%;
        transition: transform 0.2s linear;
    }

    .checkbox:checked+.checkbox-label .ball {
        transform: translateX(24px);
    }

    .menu {
        position: fixed;
        bottom: 0;
        right: 0;
        width: 280px;
        height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .menu .toggle {
        position: relative;
        height: 60px;
        width: 60px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        font-size: 2rem;
        cursor: pointer;
        transition: 1.25s;
        z-index: 5;
    }

    .menu.active .toggle {
        transform: rotate(360deg);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15),
            0 0 0 2px #333,
            0 0 0 8px #fff;
    }

    .menu li {
        position: absolute;
        left: 0;
        list-style: none;
        transition: 0.5s;
        transform: rotate(calc(360deg/8 * var(--i)));
        transform-origin: 140px;
        scale: 0;
        transition-delay: calc(0.05s * var(--i));
    }

    .menu.active li {
        scale: 1;
    }

    .menu li a {
        position: relative;
        display: flex;
        transform: rotate(calc(360deg/-8 * var(--i)));
        width: 60px;
        height: 60px;
        background-color: #FFF;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.75rem;
        color: var(--clr);
        box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
        transition: 0.5s;
    }

    .menu li:hover a {
        font-size: 2.5rem;
        box-shadow: 0 0 0 2px var(--clr),
            0 0 0 6px #fff;
    }
    
</style>