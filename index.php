<!doctype html>
<html data-n-head-ssr>
<head>
    <title>Cleavr - Your New Site</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="">
    <style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    main {
        display: block
    }

    h1 {
        font-size: 2em;
        margin: .67em 0
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    pre {
        font-family: monospace, monospace;
        font-size: 1em
    }

    a {
        background-color: transparent
    }

    abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    b, strong {
        font-weight: bolder
    }

    code, kbd, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub, sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    img {
        border-style: none
    }

    button, input, optgroup, select, textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0
    }

    button, input {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    [type=button], [type=reset], [type=submit], button {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring, button:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    fieldset {
        padding: .35em .75em .625em
    }

    legend {
        box-sizing: border-box;
        color: inherit;
        display: table;
        max-width: 100%;
        padding: 0;
        white-space: normal
    }

    progress {
        vertical-align: baseline
    }

    textarea {
        overflow: auto
    }

    [type=checkbox], [type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    details {
        display: block
    }

    summary {
        display: list-item
    }

    [hidden], template {
        display: none
    }

    blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
        margin: 0
    }

    button {
        background-color: transparent;
        background-image: none
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
    }

    fieldset, ol, ul {
        margin: 0;
        padding: 0
    }

    ol, ul {
        list-style: none
    }

    html {
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        line-height: 1.5
    }

    *, :after, :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    hr {
        border-top-width: 1px
    }

    img {
        border-style: solid
    }

    textarea {
        resize: vertical
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
        color: #a0aec0
    }

    input:-ms-input-placeholder, textarea:-ms-input-placeholder {
        color: #a0aec0
    }

    input::placeholder, textarea::placeholder {
        color: #a0aec0
    }

    [role=button], button {
        cursor: pointer
    }

    table {
        border-collapse: collapse
    }

    h1, h2, h3, h4, h5, h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    button, input, optgroup, select, textarea {
        padding: 0;
        line-height: inherit;
        color: inherit
    }

    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    audio, canvas, embed, iframe, img, object, svg, video {
        display: block;
        vertical-align: middle
    }

    img, video {
        max-width: 100%;
        height: auto
    }

    .container {
        width: 100%
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px
        }
    }

    .space-x-3 > :not(template) ~ :not(template) {
        --space-x-reverse: 0;
        margin-right: calc(.75rem * var(--space-x-reverse));
        margin-left: calc(.75rem * (1 - var(--space-x-reverse)))
    }

    .space-x-4 > :not(template) ~ :not(template) {
        --space-x-reverse: 0;
        margin-right: calc(1rem * var(--space-x-reverse));
        margin-left: calc(1rem * (1 - var(--space-x-reverse)))
    }

    .space-y-6 > :not(template) ~ :not(template) {
        --space-y-reverse: 0;
        margin-top: calc(1.5rem * (1 - var(--space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--space-y-reverse))
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .bg-gray-200 {
        --bg-opacity: 1;
        background-color: #edf2f7;
        background-color: rgba(237, 242, 247, var(--bg-opacity))
    }

    .bg-gray-400 {
        --bg-opacity: 1;
        background-color: #cbd5e0;
        background-color: rgba(203, 213, 224, var(--bg-opacity))
    }

    .bg-green-500 {
        --bg-opacity: 1;
        background-color: #48bb78;
        background-color: rgba(72, 187, 120, var(--bg-opacity))
    }

    .bg-blue-600 {
        --bg-opacity: 1;
        background-color: #3182ce;
        background-color: rgba(49, 130, 206, var(--bg-opacity))
    }

    .hover\:bg-blue-700:hover {
        --bg-opacity: 1;
        background-color: #2b6cb0;
        background-color: rgba(43, 108, 176, var(--bg-opacity))
    }

    .border-transparent {
        border-color: transparent
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .rounded-md {
        border-radius: .375rem
    }

    .rounded-full {
        border-radius: 9999px
    }

    .border {
        border-width: 1px
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .table {
        display: table
    }

    .flow-root {
        display: flow-root
    }

    .grid {
        display: grid
    }

    .flex-col {
        flex-direction: column
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .justify-between {
        justify-content: space-between
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .flex-shrink-0 {
        flex-shrink: 0
    }

    .font-medium {
        font-weight: 500
    }

    .font-bold {
        font-weight: 700
    }

    .h-5 {
        height: 1.25rem
    }

    .h-6 {
        height: 1.5rem
    }

    .h-8 {
        height: 2rem
    }

    .h-full {
        height: 100%
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .text-2xl {
        font-size: 1.5rem
    }

    .leading-6 {
        line-height: 1.5rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .mt-1 {
        margin-top: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mt-3 {
        margin-top: .75rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .-mb-8 {
        margin-bottom: -2rem
    }

    .-ml-px {
        margin-left: -1px
    }

    .max-w-xl {
        max-width: 36rem
    }

    .max-w-2xl {
        max-width: 42rem
    }

    .max-w-4xl {
        max-width: 56rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .min-w-0 {
        min-width: 0
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem
    }

    .pt-1 {
        padding-top: .25rem
    }

    .pb-2 {
        padding-bottom: .5rem
    }

    .pb-8 {
        padding-bottom: 2rem
    }

    .static {
        position: static
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .shadow-sm {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05)
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .text-blue-500 {
        --text-opacity: 1;
        color: #4299e1;
        color: rgba(66, 153, 225, var(--text-opacity))
    }

    .text-blue-600 {
        --text-opacity: 1;
        color: #3182ce;
        color: rgba(49, 130, 206, var(--text-opacity))
    }

    .hover\:text-blue-500:hover {
        --text-opacity: 1;
        color: #4299e1;
        color: rgba(66, 153, 225, var(--text-opacity))
    }

    .hover\:text-blue-700:hover {
        --text-opacity: 1;
        color: #2b6cb0;
        color: rgba(43, 108, 176, var(--text-opacity))
    }

    .uppercase {
        text-transform: uppercase
    }

    .w-0 {
        width: 0
    }

    .w-5 {
        width: 1.25rem
    }

    .w-6 {
        width: 1.5rem
    }

    .w-8 {
        width: 2rem
    }

    .gap-6 {
        grid-gap: 1.5rem;
        gap: 1.5rem
    }

    .grid-cols-1 {
        grid-template-columns:repeat(1, minmax(0, 1fr))
    }

    @-webkit-keyframes spin {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes spin {
        to {
            transform: rotate(1turn)
        }
    }

    @-webkit-keyframes ping {
        75%, to {
            transform: scale(2);
            opacity: 0
        }
    }

    @keyframes ping {
        75%, to {
            transform: scale(2);
            opacity: 0
        }
    }

    @-webkit-keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @-webkit-keyframes bounce {
        0%, to {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    @keyframes bounce {
        0%, to {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    @media (min-width: 640px) {
        .sm\:container {
            width: 100%
        }
    }

    @media (min-width: 640px) and (min-width: 640px) {
        .sm\:container {
            max-width: 640px
        }
    }

    @media (min-width: 640px) and (min-width: 768px) {
        .sm\:container {
            max-width: 768px
        }
    }

    @media (min-width: 640px) and (min-width: 1024px) {
        .sm\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 640px) and (min-width: 1280px) {
        .sm\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }
    }

    @media (min-width: 768px) {
        .md\:container {
            width: 100%
        }
    }

    @media (min-width: 768px) and (min-width: 640px) {
        .md\:container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) and (min-width: 768px) {
        .md\:container {
            max-width: 768px
        }
    }

    @media (min-width: 768px) and (min-width: 1024px) {
        .md\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 768px) and (min-width: 1280px) {
        .md\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 768px) {
        .md\:space-x-5 > :not(template) ~ :not(template) {
            --space-x-reverse: 0;
            margin-right: calc(1.25rem * var(--space-x-reverse));
            margin-left: calc(1.25rem * (1 - var(--space-x-reverse)))
        }

        .md\:flex {
            display: flex
        }

        .md\:items-center {
            align-items: center
        }

        .md\:justify-between {
            justify-content: space-between
        }
    }

    @media (min-width: 1024px) {
        .lg\:container {
            width: 100%
        }
    }

    @media (min-width: 1024px) and (min-width: 640px) {
        .lg\:container {
            max-width: 640px
        }
    }

    @media (min-width: 1024px) and (min-width: 768px) {
        .lg\:container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) and (min-width: 1024px) {
        .lg\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 1024px) and (min-width: 1280px) {
        .lg\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .lg\:grid-flow-col-dense {
            grid-auto-flow: column dense
        }

        .lg\:grid-cols-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .lg\:col-span-1 {
            grid-column: span 1/span 1
        }

        .lg\:col-span-2 {
            grid-column: span 2/span 2
        }

        .lg\:col-start-1 {
            grid-column-start: 1
        }

        .lg\:col-start-3 {
            grid-column-start: 3
        }
    }

    @media (min-width: 1280px) {
        .xl\:container {
            width: 100%
        }
    }

    @media (min-width: 1280px) and (min-width: 640px) {
        .xl\:container {
            max-width: 640px
        }
    }

    @media (min-width: 1280px) and (min-width: 768px) {
        .xl\:container {
            max-width: 768px
        }
    }

    @media (min-width: 1280px) and (min-width: 1024px) {
        .xl\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) and (min-width: 1280px) {
        .xl\:container {
            max-width: 1280px
        }
    }

    .nuxt-progress {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        width: 0;
        opacity: 1;
        transition: width .1s, opacity .4s;
        background-color: #000;
        z-index: 999999
    }

    .nuxt-progress.nuxt-progress-notransition {
        transition: none
    }

    .nuxt-progress-failed {
        background-color: red
    }

    html {
        font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 16px;
        word-spacing: 1px;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box
    }

    *, :after, :before {
        box-sizing: border-box;
        margin: 0
    }

    .button--green {
        display: inline-block;
        border-radius: 4px;
        border: 1px solid #3b8070;
        color: #3b8070;
        text-decoration: none;
        padding: 10px 30px
    }

    .button--green:hover {
        color: #fff;
        background-color: #3b8070
    }

    .button--grey {
        display: inline-block;
        border-radius: 4px;
        border: 1px solid #35495e;
        color: #35495e;
        text-decoration: none;
        padding: 10px 30px;
        margin-left: 15px
    }

    .button--grey:hover {
        color: #fff;
        background-color: #35495e
    }</style>
</head>
<body>
<div data-server-rendered="true" id="__nuxt"><!---->
    <div id="__layout">
        <div>
            <div>
                <div class="min-h-screen bg-gray-100">
                    <main class="py-10">
                        <div class="max-w-4xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                            <a href="https://cleavr.io" target="_blank" class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div><h1 class="text-2xl font-bold text-gray-900 uppercase">Cleavr</h1></div>
                            </a> <a href="https://twitter.com/thecleavr" target="_blank"
                                    class="text-blue-500 hover:text-blue-700">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a></div>
                        <div class="mt-8 max-w-4xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                                <section aria-labelledby="applicant-information-title">
                                    <div class="bg-white shadow sm:rounded-lg">
                                        <div class="px-4 py-5 sm:px-6"><h2 id="applicant-information-title"
                                                                           class="text-lg leading-6 font-medium text-gray-900">
                                            You've successfully added your PHP site! 🎉
                                        </h2>
                                            <p class="mt-1 max-w-2xl text-sm text-gray-700">
                                                Let's now work on deploying your app.
                                            </p></div>
                                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6"><h3
                                                class="text-lg leading-6 font-medium text-gray-900">
                                            Deployment guides
                                        </h3>
                                            <div class="mt-2 max-w-xl text-sm text-gray-700"><p>
                                                We have several resources to help guide you through deploying various
                                                popular apps and frameworks.
                                            </p></div>
                                            <div class="mt-3 text-sm"><a href="https://docs.cleavr.io/guides"
                                                                         target="_blank"
                                                                         class="font-medium text-blue-600 hover:text-blue-500">
                                                View the deployment guides <span aria-hidden="true">→</span></a></div>
                                        </div>
                                        <div class="blokwise__dynamic"></div>
                                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6"><h3
                                                class="text-lg leading-6 font-medium text-gray-900">
                                            Cleavr community forum
                                        </h3>
                                            <div class="mt-2 max-w-xl text-sm text-gray-700"><p>
                                                Come hang out with us on the community forum and join in on the
                                                conversations or let us know if you're stuck and need help.
                                            </p></div>
                                            <div class="mt-3 text-sm"><a href="https://forum.cleavr.io/" target="_blank"
                                                                         class="font-medium text-blue-600 hover:text-blue-500">
                                                Join in on the discussions <span aria-hidden="true">→</span></a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <section class="lg:col-start-3 lg:col-span-1">
                                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6"><h2 id="timeline-title"
                                                                                                 class="text-lg font-medium text-gray-900">
                                    Progress</h2>
                                    <div class="mt-6 flow-root">
                                        <ul class="-mb-8">
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Provision
                                                                server</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Add site</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Deploy web
                                                                app</p>
                                                                <p></p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6 flex flex-col justify-stretch"><a
                                            href="https://docs.cleavr.io/deployments" target="_blank"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        View deployment docs
                                    </a></div>
                                </div>
                                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6 mt-6 blokwise__dynamic"><h2
                                        id="timeline-title" class="text-lg font-medium text-gray-900">PHP Resources</h2>
                                    <div class="mt-3 flow-root">
                                        <ul class="-mb-8 pb-8">
                                            <li>
                                                <div class="relative pb-2"><a href="https://www.php.net/docs.php"
                                                                              class="text-sm text-blue-600 hover:text-blue-500">Documentation</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
