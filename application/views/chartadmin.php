<html lang="en">

<head>
    <meta charset="UTF-8">


    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="htm">



    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>



    <link rel="canonical" href="https://codepen.io/uiswarup/pen/eYXNPRv">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #031b4e;
            text-align: left;
            background-color: #ecf0fa;
        }

        .navbar {
            background-color: white;

        }

        .form-inline {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important;
        }

        .btn-outline-primary {
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
        }

        .horizontalMenucontainer .main-header {
            border-bottom: 1px solid #dce7f5;
        }

        .main-header-left {
            display: flex;
            align-items: center;
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .mr-sm-2,
        .mx-sm-2 {
            margin-right: .5rem !important;
        }

        .tx-16 {
            font-size: 16px;
        }

        .bg-primary-gradient {
            background-color: #845aec !important;
        }

        .card {
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .bg-danger-gradient {
            background-color: #657fe4 !important;
        }

        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .main-header {
            margin-bottom: 20px;
            border-bottom: 1px solid #dee4ec;
            box-shadow: 5px 7px 26px -5px #cdd4e7;
        }

        .horizontalMenucontainer .layout-pin.side-header.sticky-pin {
            position: fixed !important;
        }


        .bg-success-gradient {
            background-color: #4a9bed !important;
        }

        .bg-warning-gradient {
            background-color: #1fc3d4 !important;
        }

        .bg-purple-gradient {
            background-color: #75daa3 !important;
        }

        .bgorange {
            background-color: #f5be39 !important;
        }

        .bg-danger-gradient {
            background-color: #657fe4 !important;
        }

        .counter-icon {
            position: relative;
        }

        .counter-icon {
            margin-bottom: 0;
            display: inline-flex;
            width: 4rem;
            height: 4rem;
            padding: 0.5rem;
            /* overflow: hidden; */
            border-radius: 50%;
            text-align: center;
            background: rgb(255 255 255);
            line-height: 42px;
            position: relative;
        }

        #zoomBtn {
            background-color: white;
            border-radius: 50%;
            padding: 4px;
            margin-top: -13px;
            width: 30px;
            height: 30px;
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
            border: 1px solid #ffffff;
        }

        #mapcontainer,
        #barChartContainer,
        #lineChartContainer,
        #pieChartContainer,
        #tableContainer {
            transition: opacity 0.5s ease;
        }

        .sidebar-open {
            box-shadow: rgb(59 91 124) -4px -2px 60px 0px !important;
        }

        .sidebar-open {
            -webkit-animation: bounce-in-right 1.1s both;
            animation: bounce-in-right 1.1s both;
        }

        /**
 * ----------------------------------------
 * animation bounce-in-right
 * ----------------------------------------
 */
        @-webkit-keyframes bounce-in-right {
            0% {
                -webkit-transform: translateX(600px);
                transform: translateX(600px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            38% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                opacity: 1;
            }

            55% {
                -webkit-transform: translateX(68px);
                transform: translateX(68px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            72% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            81% {
                -webkit-transform: translateX(32px);
                transform: translateX(32px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            90% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            95% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }

        @keyframes bounce-in-right {
            0% {
                -webkit-transform: translateX(600px);
                transform: translateX(600px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            38% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                opacity: 1;
            }

            55% {
                -webkit-transform: translateX(68px);
                transform: translateX(68px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            72% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            81% {
                -webkit-transform: translateX(32px);
                transform: translateX(32px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            90% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            95% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
        }

        .main-dashboard-header-right {
            display: none;
        }

        [pointer-events="bounding-box"] {
            display: none;
        }

        svg .raphael-group-5-background rect {
            stroke: white;
        }

        svg .raphael-group-4-background rect {
            stroke-width: 0;
        }

        /* Add this CSS to your stylesheet */

        .district {
            transition: transform 0.3s;
            /* Add a smooth transition effect */
        }

        .district:hover {
            transform: scale(1.1);
            /* Scale up the district on hover */
        }

        .district {
            transition: transform 0.3s;
        }

        .district:hover {
            transform: scale(1.1);
            z-index: 1;
            /* Ensures the hovered district is on top */
        }

        .main-dashboard-header-right .rdiobox span:before {
            top: auto;
            left: 10px;
        }

        .main-dashboard-header-right .rdiobox span {
            color: white;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
        }

        .main-dashboard-header-right .rdiobox span:after {
            top: 13px;
            left: 14px;
            width: 8px;
            height: 8px;
        }

        .boxDsh .card-body input[type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        .boxDsh .card-body input[type="radio"]:checked+label,
        .boxDsh .card-body input[type="radio"]:not(:checked)+label {
            position: absolute;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
            left: 6px;
            top: 6px;
        }

        .tablenew tr th,
        .tablenew tr td {
            padding: 7px !important;
        }

        .boxDsh .card-body input[type="radio"]:checked+label:before,
        .boxDsh .card-body input[type="radio"]:not(:checked)+label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
            box-shadow: inset 0 7px 10px #7a7cff;
        }

        .boxDsh .card-body input[type="radio"]:checked+label:after,
        .boxDsh .card-body input[type="radio"]:not(:checked)+label:after {
            content: "";
            width: 10px;
            height: 10px;
            background: #025fdb;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .boxDsh .card-body input[type="radio"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .boxDsh .card-body input[type="radio"]:checked+label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        /*************************/

        .boxDsh .card:hover .checkbox-input {
            clip: auto !important;
            -webkit-clip-path: fill-box;
            clip-path: none;
        }

        .checkbox-input:checked+.checkbox-tile .checkbox-icon,
        .checkbox-input:checked+.checkbox-tile .checkbox-label {
            color: #2260ff;
        }

        .checkbox-input:focus+.checkbox-tile {
            border-color: #2260ff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .fs-12 {
            font-size: 13px;
        }

        .card-dashboard-map-one {
            padding: 4px;
        }

        .tablecustom td,
        .table-bordered th {
            padding: 3px;
        }

        .checkbox-input:checked+.checkbox-tile:before {
            transform: scale(1);
            opacity: 1;
            background-color: #7016d0;
            border-color: #7016d0;
        }

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
            z-index: 999;
            position: absolute;
            left: 4px;
            top: 4px;
            display: block;
            background-color: white;
            height: 20px;
            width: 20px;
            cursor: pointer;
        }

        .card-price {
            background-color: rgb(0 0 0 / 6%);
            float: left;
            width: 100%;
            padding: 7px 0px;
            border-top: 1px solid rgb(255 255 255 / 21%);
        }

        .counter-icon::after {
            content: "";
            position: absolute;
            width: 72px;
            height: 72px;
            border: 2px dotted white;
            border-radius: 50%;
            margin: auto;
            text-align: center;
            right: -4px;
            top: -4px;
            z-index: 1;
        }

        .boxDsh .card-body {
            padding-bottom: 5px;
        }

        .breadcrumb-header {
            background-color: white;
            padding: 8px 5px;
            border-radius: 5px;
            box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
        }

        .breadcrumb-header .left-content h2 {
            padding-top: 5px;
            padding-left: 10px;
        }

        .jsplgrad {
            background-color: #f5713d !important;
        }

        .card {
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .boxDsh .col:hover .card {
            /* -webkit-animation: scale-up-ver-top 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
            animation: scale-up-ver-top 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;*/
        }

        .boxDsh .col:hover .card .counter-icon::after {
            -webkit-animation: rotate-center 8s linear infinite forwards;
            animation: rotate-center 8s linear infinite forwards;
        }

        /**
 * ----------------------------------------
 * animation scale-up-ver-top
 * ----------------------------------------
 */
        @-webkit-keyframes scale-up-ver-top {
            0% {
                -webkit-transform: scaleY(0.4);
                transform: scaleY(0.4);
                -webkit-transform-origin: 100% 0%;
                transform-origin: 100% 0%;
            }

            100% {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
                -webkit-transform-origin: 100% 0%;
                transform-origin: 100% 0%;
            }
        }

        @keyframes scale-up-ver-top {
            0% {
                -webkit-transform: scaleY(0.4);
                transform: scaleY(0.4);
                -webkit-transform-origin: 100% 0%;
                transform-origin: 100% 0%;
            }

            100% {
                -webkit-transform: scaleY(1);
                transform: scaleY(1);
                -webkit-transform-origin: 100% 0%;
                transform-origin: 100% 0%;
            }
        }

        /**
        * ----------------------------------------
        * animation rotate-center
        * ----------------------------------------
        */
        @-webkit-keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .sortable-list {
            max-width: 100%;
            display: block;
        }

        .sortable-item {
            color: rgba(0, 0, 0, 0.87);
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            user-select: none;
        }

        #sortable-horizontal .sortable-item {
            width: 100%;
            border-bottom: none;
        }

        #sortable-grid {
            border: none;
            padding: 0;
            margin: 0;
        }

        #sortable-grid .sortable-item {
            text-align: center;
        }

        #sortable-condition-1,
        #sortable-condition-2 {
            max-width: 100%;
            display: block;
        }

        /*****************/
        .tooltip {
            position: absolute;
            backdrop-filter: saturate(180%) blur(20px);
            top: 0;
            font-size: 14px;
            background: rgb(255 255 255 / 65%);
            color: #ffffff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: rgb(255 255 255 / 31%);
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .boxDsh .card:hover .tooltip {
            top: 94px;
            left: 5px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            color: #0267e8;
        }

        .totalBnf {
            background-color: rgb(255 255 255 / 19%);
            padding: 6px 8px;
            width: 90%;
            margin: auto;
            text-align: center;
            display: block;
            border-radius: 10px;
            color: white;
            border: 1px solid rgb(0 0 0 / 16%);
            font-size: 12px;
            margin: 4px auto;
        }

        .boxDsh .card {
            transition: opacity 0.2s;
            opacity: 1;
        }

        .boxDsh .card:not(.highlight) {
            opacity: 1;
        }

        .breadcrumb-header {
            background-color: white;
            padding: 8px 5px;
            border-radius: 5px;
            box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
            margin: 20px 0px;
        }

        .boxDsh h4.counter {
            font-size: 16px;
        }

        .boxDsh .highlighted {
            transform: scale(1.1);
            box-shadow: rgb(69 69 255 / 48%) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
            border: none;
            transition: 0.2s;
        }

        .zoomDV {
            overflow-x: hidden;
            overflow-y: auto;
            z-index: 1072;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transition: opacity 0.15s linear;
            background-color: rgb(0 0 0 / 49%);
            max-width: 100%;
            backdrop-filter: saturate(180%) blur(10px);
        }

        .zoomDV .card {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            max-width: 55%;
            margin: 1.75rem auto;
            position: relative;
            width: auto;
        }
    </style>



    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
</head>

<body translate="no">
    <div class="page">
        <div class="main-content app-content">

            <div class="container-fluid">


                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <div>
                            <h5 class="pl-4 main-content-title mb-0 tx-24 mg-b-1 mg-b-lg-1">Dashboard</h5>
                        </div>
                    </div>
                    <div class="main-dashboard-header-right">
                        <div class="d-flex my-xl-auto right-content">
                            <div class="pr-1 mb-xl-0">
                                <label class="rdiobox btn btn-warning mr-2"><input name="rdio" id="graphDV"
                                        type="radio"> <span>Graph</span></label>
                            </div>
                            <div class="pr-1 mb-xl-0">
                                <label class="rdiobox btn btn-danger mr-2"><input name="rdio" id="mapDV" type="radio">
                                    <span>Map</span></label>
                            </div>
                            <div class="pr-1 mb-xl-0">
                                <label class="rdiobox btn btn-success mr-2"><input name="rdio" id="tableDV"
                                        type="radio"> <span>Table</span></label>
                            </div>
                            <div class="pr-1 mb-xl-0 right-toggle">
                                <button type="button" class="btn btn-info btn-icon mr-2" data-toggle="sidebar-right"
                                    data-target=".sidebar-right"><i class="mdi mdi-filter-variant"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /breadcrumb -->



                <!-- optional -->
                <div class="row boxDsh">
                    <div class="col-md-6">

                        <div class="card  jsplgrad" id="card1">
                            <div class="card-body">
                                <div class="counter-status md-mb-0 text-center">
                                    <input type="radio" id="radioJSLPS" name="radio-group">
                                    <label for="radioJSLPS"></label>

                                    <div class="ml-auto text-center">
                                        <h4 class="tx-16  mt-3 mb-0 text-center text-white">Total count of participate
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-center card-price py-4">
                                <h4 class="counter mb-0 text-white">
                                    <?php echo $total_participation['total_participation'] ?></h4>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="card  bg-primary-gradient" id="card2">
                            <div class="card-body">
                                <div class="counter-status md-mb-0 text-center">
                                    <input type="radio" id="radio1" name="radio-group">
                                    <label for="radio1"></label>

                                    <div class="ml-auto text-center">
                                        <h4 class="tx-16  mt-2 mb-0 text-center text-white">NRLM</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-center card-price">
                                <span class="totalBnf">Total Beneficiary</span>
                                <h4 class="counter mb-0 text-white">21,000</h4>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="card  bg-danger-gradient" id="card3">
                            <div class="card-body">
                                <input type="radio" id="radio2" name="radio-group">
                                <label for="radio2"></label>
                                <div class="counter-status md-mb-0 text-center">
                                    <div class="counter-icon text-warning">
                                        <i class="icon icon-rocket">
                                            <img
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Jharkhand_Rajakiya_Chihna.svg/48px-Jharkhand_Rajakiya_Chihna.svg.png">
                                        </i>
                                    </div>
                                    <div class="ml-auto text-center">
                                        <h5 class="tx-16  mt-2 mb-0 text-center text-white">MKSP</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-center card-price">
                                <span class="totalBnf">Total Beneficiary</span>
                                <h4 class="counter mb-0 text-white">5,469</h4>
                            </div>
                        </div>
                    </div> -->


                </div>
                <!-- optional -->

                <div class="row h-100 my-4">
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question1</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question2</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart2" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question3</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart3" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question4</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart4" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question5</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart5" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question6</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart6" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question7</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart7" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question8</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart8" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question9</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart9" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question10</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart10" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question11</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart11" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question12</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart12" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question13</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart13" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question14</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart14" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h6 class="card-title mb-0 flex-grow-1">Question15</h6>

                            </div>
                            <div class="card-body p-0">
                                <div id="chart1">
                                    <div id="apex-chart15" style="min-height: 395px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"></script>
    <script id="rendered-js">
        let abm_question1 = <?php echo json_encode($abm_question1); ?>;
        let rbm_question1 = <?php echo json_encode($rbm_question1); ?>;
        let sales_question1 = <?php echo json_encode($sales_question1); ?>;
        let other_question1 = <?php echo json_encode($other_question1); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question1, rbm_question1, sales_question1, other_question1]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart"), options);

        chart.render();





    </script>

    <script id="rendered-js">
        let abm_question2 = <?php echo json_encode($abm_question2); ?>;
        let rbm_question2 = <?php echo json_encode($rbm_question2); ?>;
        let sales_question2 = <?php echo json_encode($sales_question2); ?>;
        let other_question2 = <?php echo json_encode($other_question2); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question2, rbm_question2, sales_question2, other_question2]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart2"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question3 = <?php echo json_encode($abm_question3); ?>;
        let rbm_question3 = <?php echo json_encode($rbm_question3); ?>;
        let sales_question3 = <?php echo json_encode($sales_question3); ?>;
        let other_question3 = <?php echo json_encode($other_question3); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question3, rbm_question3, sales_question3, other_question3]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart3"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question4 = <?php echo json_encode($abm_question4); ?>;
        let rbm_question4 = <?php echo json_encode($rbm_question4); ?>;
        let sales_question4 = <?php echo json_encode($sales_question4); ?>;
        let other_question4 = <?php echo json_encode($other_question4); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question4, rbm_question4, sales_question4, other_question4]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart4"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question5 = <?php echo json_encode($abm_question5); ?>;
        let rbm_question5 = <?php echo json_encode($rbm_question5); ?>;
        let sales_question5 = <?php echo json_encode($sales_question5); ?>;
        let other_question5 = <?php echo json_encode($other_question1); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question5, rbm_question5, sales_question5, other_question5]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart5"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question6 = <?php echo json_encode($abm_question6); ?>;
        let rbm_question6 = <?php echo json_encode($rbm_question6); ?>;
        let sales_question6 = <?php echo json_encode($sales_question6); ?>;
        let other_question6 = <?php echo json_encode($other_question6); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question6, rbm_question6, sales_question6, other_question6]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart6"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question7 = <?php echo json_encode($abm_question7); ?>;
        let rbm_question7 = <?php echo json_encode($rbm_question7); ?>;
        let sales_question7 = <?php echo json_encode($sales_question7); ?>;
        let other_question7 = <?php echo json_encode($other_question7); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question7, rbm_question7, sales_question7, other_question7]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart7"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question8 = <?php echo json_encode($abm_question8); ?>;
        let rbm_question8 = <?php echo json_encode($rbm_question8); ?>;
        let sales_question8 = <?php echo json_encode($sales_question8); ?>;
        let other_question8 = <?php echo json_encode($other_question8); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question8, rbm_question8, sales_question8, other_question8]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart8"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question9 = <?php echo json_encode($abm_question9); ?>;
        let rbm_question9 = <?php echo json_encode($rbm_question9); ?>;
        let sales_question9 = <?php echo json_encode($sales_question9); ?>;
        let other_question9 = <?php echo json_encode($other_question9); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question9, rbm_question9, sales_question9, other_question9]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart9"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question10 = <?php echo json_encode($abm_question10); ?>;
        let rbm_question10 = <?php echo json_encode($rbm_question10); ?>;
        let sales_question10 = <?php echo json_encode($sales_question10); ?>;
        let other_question10 = <?php echo json_encode($other_question10); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question10, rbm_question10, sales_question10, other_question10]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart10"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question11 = <?php echo json_encode($abm_question11); ?>;
        let rbm_question11 = <?php echo json_encode($rbm_question11); ?>;
        let sales_question11 = <?php echo json_encode($sales_question11); ?>;
        let other_question11 = <?php echo json_encode($other_question11); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question11, rbm_question11, sales_question11, other_question11]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart11"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question12 = <?php echo json_encode($abm_question12); ?>;
        let rbm_question12 = <?php echo json_encode($rbm_question12); ?>;
        let sales_question12 = <?php echo json_encode($sales_question12); ?>;
        let other_question12 = <?php echo json_encode($other_question12); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question12, rbm_question12, sales_question12, other_question12]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart12"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question13 = <?php echo json_encode($abm_question13); ?>;
        let rbm_question13 = <?php echo json_encode($rbm_question13); ?>;
        let sales_question13 = <?php echo json_encode($sales_question13); ?>;
        let other_question13 = <?php echo json_encode($other_question13); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question13, rbm_question13, sales_question13, other_question13]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart13"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question14 = <?php echo json_encode($abm_question14); ?>;
        let rbm_question14 = <?php echo json_encode($rbm_question14); ?>;
        let sales_question14 = <?php echo json_encode($sales_question14); ?>;
        let other_question14 = <?php echo json_encode($other_question14); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question14, rbm_question14, sales_question14, other_question14]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart14"), options);

        chart.render();





    </script>
    <script id="rendered-js">
        let abm_question15 = <?php echo json_encode($abm_question15); ?>;
        let rbm_question15 = <?php echo json_encode($rbm_question15); ?>;
        let sales_question15 = <?php echo json_encode($sales_question15); ?>;
        let other_question15 = <?php echo json_encode($other_question15); ?>;

        /**************apex*******/
        var options = {
            chart: {
                width: "100%",
                height: 380,
                type: "bar"
            },

            plotOptions: {
                bar: {
                    horizontal: true
                }
            },


            dataLabels: {
                enabled: false
            },

            stroke: {
                width: 0,
                colors: ["#fff"]
            },


            series: [
                {

                    data: [abm_question15, rbm_question15, sales_question15, other_question15]
                }],


            xaxis: {
                categories: [
                    "ABM",
                    "RBM",
                    "Sales Officer",
                    "Others",]
            },



            tooltip: {
                custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                    return (
                        '<div class="arrow_box">' +
                        "<span>" +
                        w.globals.labels[dataPointIndex] +
                        ": " +
                        series[seriesIndex][dataPointIndex] +
                        "</span>" +
                        "</div>");

                }
            },

            colors: ["#8c68cd", "#FFBD33", "#33FF49", "#33B3FF", "#B033FF", "#FF33F9", "#33FFF4"] // Specify custom bar colors here
        };

        var chart = new ApexCharts(document.querySelector("#apex-chart15"), options);

        chart.render();





    </script>



</body>

</html>