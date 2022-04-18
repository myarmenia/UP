<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style/all.css') }}">

 @yield('style')
</head>

<body>
    <svg style="display: none;">
        <symbol id="_icon-tiktok" viewBox="0 0 32 32">
            <g>
                <path
                    d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z" />
            </g>
        </symbol>
        <symbol id="_icon-inst" viewBox="0 0 20 20">
            <g>
                <path
                    d="M0.351562 6.55289C0.413938 6.1062 0.461462 5.65696 0.540744 5.2135C0.990165 2.70178 2.74375 0.992845 5.2511 0.905267C8.27001 0.800081 11.2981 0.794521 14.3165 0.904804C17.0455 1.00443 19.0218 3.05348 19.1071 5.82169C19.1978 8.76111 19.1978 11.7077 19.1071 14.6471C19.0218 17.4153 17.0462 19.4642 14.3167 19.564C11.2983 19.6745 8.26955 19.6773 5.25132 19.5624C2.5219 19.4584 0.635107 17.4047 0.452551 14.6323C0.436786 14.3925 0.386063 14.1548 0.351562 13.9162C0.351562 11.4617 0.351562 9.00716 0.351562 6.55289ZM9.76587 17.9234C11.1473 17.9234 12.53 17.9654 13.9096 17.9137C16.0726 17.8324 17.4031 16.5233 17.4535 14.332C17.5161 11.6016 17.5161 8.86745 17.4535 6.13678C17.4031 3.94594 16.0717 2.60632 13.9096 2.55975C11.1653 2.5009 8.41806 2.50137 5.67378 2.55975C3.52813 2.60539 2.1938 3.91791 2.13554 6.08465C2.06151 8.84962 2.06151 11.6194 2.13554 14.3844C2.1938 16.5509 3.52813 17.8331 5.67401 17.9137C7.03621 17.9651 8.40184 17.9234 9.76587 17.9234Z" />
                <path
                    d="M9.76631 5.05859C6.90759 5.05859 4.58984 7.37615 4.58984 10.2349C4.58984 13.094 6.90759 15.4115 9.76631 15.4115C12.6253 15.4115 14.9428 13.094 14.9428 10.2349C14.9428 7.37615 12.6253 5.05859 9.76631 5.05859ZM9.76631 13.6293C7.89165 13.6293 6.37205 12.1096 6.37205 10.2349C6.37205 8.36023 7.89165 6.84059 9.76631 6.84059C11.641 6.84059 13.1606 8.36023 13.1606 10.2349C13.1606 12.1096 11.641 13.6293 9.76631 13.6293Z" />
            </g>
        </symbol>
        <symbol id="_icon-twitter" viewBox="0 0 25 20">
            <g>
                <path
                    d="M24.2504 2.37263C23.3933 2.75268 22.4714 3.00972 21.5045 3.12452C22.4917 2.53306 23.2493 1.59721 23.6069 0.480245C22.6831 1.02821 21.6596 1.42573 20.5711 1.63999C19.6991 0.711268 18.4566 0.130859 17.0808 0.130859C14.4412 0.130859 12.3003 2.27174 12.3003 4.91138C12.3003 5.28608 12.3427 5.65079 12.4247 6.00089C8.45174 5.8016 4.929 3.89852 2.57101 1.00539C2.15959 1.71129 1.92358 2.53306 1.92358 3.40902C1.92358 5.06718 2.76816 6.53103 4.05019 7.38809C3.26693 7.36349 2.5293 7.14852 1.88507 6.78951C1.88472 6.80983 1.88472 6.83015 1.88472 6.85011C1.88472 9.1664 3.53325 11.0984 5.71976 11.5372C5.31903 11.647 4.89585 11.7051 4.46054 11.7051C4.1518 11.7051 3.85268 11.6756 3.56105 11.6199C4.16927 13.5187 5.93438 14.901 8.02677 14.9398C6.39036 16.2222 4.32934 16.9862 2.089 16.9862C1.70396 16.9862 1.32249 16.9637 0.949219 16.9192C3.06371 18.2761 5.57715 19.0672 8.27669 19.0672C17.0698 19.0672 21.8785 11.7829 21.8785 5.46505C21.8785 5.25791 21.8738 5.05149 21.8646 4.84685C22.7994 4.17304 23.6097 3.3313 24.2504 2.37263Z" />
            </g>
        </symbol>
        <symbol id="_icon-vk" viewBox="0 0 23 12">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.253 11.9498H12.6278C12.6278 11.9498 13.0431 11.9081 13.2551 11.699C13.4502 11.5071 13.444 11.1468 13.444 11.1468C13.444 11.1468 13.4171 9.45966 14.2733 9.21123C15.1173 8.9665 16.2011 10.8418 17.3498 11.5628C18.2185 12.1085 18.8785 11.9889 18.8785 11.9889L21.9501 11.9498C21.9501 11.9498 23.5568 11.8592 22.795 10.7039C22.7325 10.6093 22.3513 9.84917 20.5113 8.28715C18.5853 6.65231 18.8433 6.91674 21.1632 4.08883C22.5761 2.3666 23.1409 1.31517 22.9645 0.864837C22.7962 0.435923 21.7571 0.549291 21.7571 0.549291L18.2987 0.568995C18.2987 0.568995 18.0424 0.537012 17.8522 0.640956C17.6664 0.742902 17.5468 0.98049 17.5468 0.98049C17.5468 0.98049 16.9995 2.3132 16.2695 3.4466C14.7295 5.83817 14.1137 5.96439 13.8621 5.8159C13.2766 5.4698 13.4228 4.4255 13.4228 3.68361C13.4228 1.366 13.8071 0.399658 12.6743 0.149506C12.2984 0.0664077 12.0217 0.0115799 11.0603 0.00272747C9.82637 -0.00898055 8.78192 0.00615383 8.19054 0.271155C7.79711 0.447346 7.49361 0.839993 7.67846 0.862552C7.90702 0.890537 8.42472 0.990198 8.69918 1.33202C9.05357 1.77292 9.04108 2.76325 9.04108 2.76325C9.04108 2.76325 9.24466 5.4915 8.56554 5.83046C8.09936 6.06291 7.45989 5.58831 6.08697 3.41861C5.38349 2.30721 4.85237 1.07872 4.85237 1.07872C4.85237 1.07872 4.74996 0.849131 4.56729 0.726339C4.3456 0.577562 4.03586 0.530159 4.03586 0.530159L0.749524 0.549862C0.749524 0.549862 0.256184 0.562428 0.0750839 0.758608C-0.0860324 0.933086 0.0622819 1.29404 0.0622819 1.29404C0.0622819 1.29404 2.63515 6.79909 5.54835 9.57332C8.21957 12.1168 11.253 11.9498 11.253 11.9498Z" />
            </g>
        </symbol>
        <symbol id="_icon-ok" viewBox="0 0 14 24">
            <g>
                <path
                    d="M9.413 17.4857C10.6618 17.2286 11.8273 16.7143 12.8263 16.0286C13.6588 15.5143 13.9086 14.4 13.4091 13.5429C12.9096 12.6857 11.8273 12.4286 10.9948 12.9429C8.58048 14.4857 5.41692 14.4857 3.00262 12.9429C2.17011 12.4286 1.08783 12.6857 0.588323 13.5429C0.0888133 14.4 0.338569 15.5143 1.17109 16.0286C2.25336 16.7143 3.41888 17.2286 4.5844 17.4857L1.25434 20.9143C0.588324 21.6 0.588324 22.7143 1.25434 23.4857C1.58734 23.8286 2.0036 24 2.50311 24C2.91937 24 3.41888 23.8286 3.75189 23.4857L6.9987 20.1429L10.2455 23.4857C10.9115 24.1714 11.9938 24.1714 12.7431 23.4857C13.4091 22.8 13.4091 21.6857 12.7431 20.9143L9.413 17.4857ZM6.9987 0C3.75189 0 1.17109 2.65714 1.17109 6C1.17109 9.34286 3.75189 12 6.9987 12C10.2455 12 12.8263 9.34286 12.8263 6C12.8263 2.65714 10.2455 0 6.9987 0ZM6.9987 8.57143C5.58342 8.57143 4.50115 7.45714 4.50115 6C4.50115 4.54286 5.58342 3.42857 6.9987 3.42857C8.41398 3.42857 9.49625 4.54286 9.49625 6C9.49625 7.45714 8.41398 8.57143 6.9987 8.57143Z" />
            </g>
        </symbol>
        <symbol id="_icon-facebook" viewBox="0 0 12 26">
            <g>
                <path
                    d="M10.9051 13.3083H7.74126V25.9993H2.94777V13.3083H0.667969V8.84814H2.94777V5.96192C2.94777 3.89796 3.84319 0.666016 7.78393 0.666016L11.3346 0.682281V5.01161H8.75836C8.33578 5.01161 7.74157 5.24279 7.74157 6.22735V8.85229H11.3239L10.9051 13.3083Z" />
            </g>
        </symbol>




        <!-- cabinet icons -->

        <symbol id="_icon-cabinet-user" viewBox="0 0 31 30">
            <g>
                <ellipse cx="15.5" cy="7.89464" rx="7.5" ry="7.89464" />
                <path
                    d="M0.5 28.9453C0.5 23.4225 4.97715 18.9453 10.5 18.9453H20.5C26.0228 18.9453 30.5 23.4225 30.5 28.9453V29.9978H0.5V28.9453Z" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-notific" viewBox="0 0 27 30">
            <g>
                <path
                    d="M25.6926 21.2396C23.7271 19.6346 22.6 17.2887 22.6 14.8034V11.3023C22.6 6.88319 19.2018 3.22499 14.8 2.61218V1.25573C14.8 0.561297 14.2176 0 13.4999 0C12.7824 0 12.2 0.561297 12.2 1.25573V2.61218C7.79677 3.22499 4.39999 6.88319 4.39999 11.3023V14.8034C4.39999 17.2887 3.27289 19.6346 1.29552 21.2495C0.789928 21.6678 0.5 22.2755 0.5 22.9185C0.5 24.1305 1.52046 25.1163 2.77491 25.1163H24.2248C25.4795 25.1163 26.5 24.1305 26.5 22.9185C26.5 22.2755 26.2101 21.6678 25.6926 21.2396Z" />
                <path
                    d="M13.5004 30.0001C15.8807 30.0001 17.8718 28.4988 18.329 26.5117H8.67188C9.12934 28.4988 11.1205 30.0001 13.5004 30.0001Z" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-courses" viewBox="0 0 34 24">
            <g>
                <path d="M16.6047 0L34 7.46789L16.6047 14.3303L6.12791 10.0004L0 7.46789L16.6047 0Z" />
                <path d="M6.40385 19.5484L6 12L16.7019 16.4516L27 12.5806V20.129L16.7019 24L6.40385 19.5484Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31 18L31 8L32 8L32 18L31 18Z" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-courses-search" viewBox="0 0 30 29">
            <g>
                <rect x="0.333333" y="0.333333" width="29.3333" height="22.6667" stroke-width="0.666667" />
                <path
                    d="M10.6281 26.668H10.8601L10.9407 26.4504L11.4775 25.0013H18.5212L19.058 26.4504L19.1386 26.668H19.3706H22.9993V27.668H6.99935V26.668H10.6281Z"
                    stroke-width="0.666667" />
                <circle cx="12.666" cy="9.99609" r="5.33333" stroke="white" stroke-width="1.33333" />
                <rect x="17.2969" y="12.6641" width="7.18782" height="1.69038"
                    transform="rotate(40.4227 17.2969 12.6641)" fill="white" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-message" viewBox="0 0 31 27">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M30.5 11.93C30.5 16.6946 26.9882 20.8068 21.9109 22.7187L22.2044 27.001L17.2062 23.7837C16.6462 23.8342 16.0769 23.8601 15.5 23.8601C7.21573 23.8601 0.5 18.5188 0.5 11.93C0.5 5.34126 7.21573 0 15.5 0C23.7843 0 30.5 5.34126 30.5 11.93ZM9.91938 13.5405C10.8365 13.5405 11.58 12.7611 11.58 11.7995C11.58 10.838 10.8365 10.0586 9.91938 10.0586C9.00226 10.0586 8.25879 10.838 8.25879 11.7995C8.25879 12.7611 9.00226 13.5405 9.91938 13.5405ZM17.1156 11.7995C17.1156 12.7611 16.3721 13.5405 15.455 13.5405C14.5379 13.5405 13.7944 12.7611 13.7944 11.7995C13.7944 10.838 14.5379 10.0586 15.455 10.0586C16.3721 10.0586 17.1156 10.838 17.1156 11.7995ZM20.9907 13.5405C21.9078 13.5405 22.6513 12.7611 22.6513 11.7995C22.6513 10.838 21.9078 10.0586 20.9907 10.0586C20.0735 10.0586 19.3301 10.838 19.3301 11.7995C19.3301 12.7611 20.0735 13.5405 20.9907 13.5405Z" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-settings" viewBox="0 0 30 30">
            <g>
                <path
                    d="M29.1005 18.2875L26.343 16.1313C26.378 15.7987 26.408 15.41 26.408 14.9988C26.408 14.5875 26.3792 14.1988 26.343 13.8663L29.103 11.7088C29.6155 11.3038 29.7555 10.585 29.4293 9.98631L26.5618 5.025C26.2555 4.46502 25.5842 4.1775 24.903 4.42875L21.6493 5.73498C21.0255 5.28498 20.3717 4.905 19.6955 4.60125L19.2005 1.15002C19.1192 0.495 18.5492 0 17.8755 0H12.1255C11.4518 0 10.8831 0.495 10.803 1.14L10.3068 4.60377C9.65178 4.89879 9.00807 5.27379 8.3568 5.7375L5.0943 4.42752C4.48299 4.19127 3.75174 4.45623 3.44799 5.01375L0.576781 9.98127C0.238051 10.5538 0.378031 11.2975 0.901801 11.7125L3.65928 13.8688C3.61551 14.29 3.5943 14.6563 3.5943 15.0001C3.5943 15.3438 3.61557 15.71 3.65928 16.1326L0.899281 18.29C0.386762 18.6963 0.248012 19.415 0.574262 20.0125L3.44178 24.9738C3.74805 25.5325 4.41303 25.8225 5.10051 25.57L8.35428 24.2638C8.97678 24.7126 9.63051 25.0925 10.3068 25.3975L10.8018 28.8475C10.883 29.505 11.4518 30 12.1268 30H17.8768C18.5505 30 19.1205 29.505 19.2005 28.86L19.6967 25.3975C20.3518 25.1013 20.9942 24.7275 21.6467 24.2625L24.9092 25.5725C25.0667 25.6337 25.2305 25.665 25.3993 25.665C25.8842 25.665 26.3305 25.4 26.5555 24.9875L29.4355 20C29.7555 19.415 29.6155 18.6963 29.1005 18.2875ZM15.0005 20C12.243 20 10.0005 17.7575 10.0005 15C10.0005 12.2425 12.243 10 15.0005 10C17.758 10 20.0005 12.2425 20.0005 15C20.0005 17.7575 17.758 20 15.0005 20Z" />
            </g>
        </symbol>
        <symbol id="_icon-cabinet-exit" viewBox="0 0 30 30">
            <g>
                <path
                    d="M21.1523 23.2031C20.5051 23.2031 19.9805 23.7278 19.9805 24.375V27.6562H3.22266V2.34375H19.9805V5.625C19.9805 6.27223 20.5051 6.79688 21.1523 6.79688C21.7996 6.79688 22.3242 6.27223 22.3242 5.625V1.17188C22.3242 0.524648 21.7996 0 21.1523 0H2.05078C1.40355 0 0.878906 0.524648 0.878906 1.17188V28.8281C0.878906 29.4754 1.40355 30 2.05078 30H21.1523C21.7996 30 22.3242 29.4754 22.3242 28.8281V24.375C22.3242 23.7278 21.7996 23.2031 21.1523 23.2031Z" />
                <path
                    d="M28.7776 14.1718L25.6287 11.0229C25.1711 10.5652 24.4292 10.5653 23.9715 11.0229C23.5138 11.4805 23.5138 12.2226 23.9715 12.6802L25.1198 13.8285L15.4121 13.8285C14.7649 13.8285 14.2402 14.3531 14.2402 15.0003C14.2402 15.6476 14.7649 16.1722 15.4121 16.1722L25.1199 16.1723L23.9715 17.3206C23.5139 17.7782 23.5139 18.5202 23.9715 18.9779C24.4292 19.4356 25.1712 19.4355 25.6288 18.9778L28.7776 15.829C28.7777 15.8289 28.7778 15.8288 28.7779 15.8287C29.0136 15.5928 29.1124 15.32 29.1209 15.0004C29.1209 14.6844 28.9866 14.3807 28.7776 14.1718Z" />
            </g>
        </symbol>

        <symbol id="_icon-cabinet-rating" viewBox="0 0 32 30">
            <g clip-path="url(#clip0_1184:16107)">
                <path
                    d="M4.95243 16.3945L0.624932 23.9077C0.435557 24.2377 0.463682 24.6483 0.694307 24.9483C0.924931 25.2483 1.31306 25.3833 1.68056 25.282L7.18556 23.8027L8.64993 29.3077C8.74743 29.6733 9.05681 29.9452 9.43181 29.9958C9.47306 29.9995 9.51618 30.0014 9.55556 30.0014C9.88743 30.0014 10.1987 29.8252 10.3674 29.5327L14.4606 22.4489C10.3937 22.1039 6.89868 19.7545 4.95243 16.3945Z" />
                <path
                    d="M30.3766 23.9077L26.0472 16.3945C24.1028 19.7545 20.6059 22.1039 16.5391 22.4489L20.6322 29.5327C20.8009 29.8252 21.1122 30.0014 21.4441 30.0014C21.4834 30.0014 21.5266 29.9995 21.5659 29.9939C21.9428 29.9433 22.2503 29.6714 22.3497 29.3058L23.8141 23.8008L29.3191 25.2802C29.6866 25.3814 30.0728 25.2464 30.3053 24.9464C30.5378 24.6483 30.5641 24.2377 30.3766 23.9077Z" />
                <mask id="path-3-inside-1_1184:16107">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.4993 20.6667C21.2063 20.6667 25.8327 16.0403 25.8327 10.3333C25.8327 4.62639 21.2063 0 15.4993 0C9.79241 0 5.16602 4.62639 5.16602 10.3333C5.16602 16.0403 9.79241 20.6667 15.4993 20.6667ZM16.9212 8.37634L15.4992 4.00011L14.0773 8.37634H9.47588L13.1985 11.081L11.7766 15.4572L15.4992 12.7526L19.2219 15.4572L17.8 11.081L21.5226 8.37634H16.9212Z" />
                </mask>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.4993 20.6667C21.2063 20.6667 25.8327 16.0403 25.8327 10.3333C25.8327 4.62639 21.2063 0 15.4993 0C9.79241 0 5.16602 4.62639 5.16602 10.3333C5.16602 16.0403 9.79241 20.6667 15.4993 20.6667ZM16.9212 8.37634L15.4992 4.00011L14.0773 8.37634H9.47588L13.1985 11.081L11.7766 15.4572L15.4992 12.7526L19.2219 15.4572L17.8 11.081L21.5226 8.37634H16.9212Z" />
                <path
                    d="M15.4992 4.00011L16.4503 3.6911L15.4992 0.764048L14.5482 3.6911L15.4992 4.00011ZM16.9212 8.37634L15.9701 8.68536L16.1946 9.37634H16.9212V8.37634ZM14.0773 8.37634V9.37634H14.8039L15.0284 8.68536L14.0773 8.37634ZM9.47588 8.37634V7.37634H6.39819L8.88809 9.18536L9.47588 8.37634ZM13.1985 11.081L14.1496 11.39L14.3741 10.699L13.7863 10.272L13.1985 11.081ZM11.7766 15.4572L10.8255 15.1482L9.87448 18.0753L12.3644 16.2662L11.7766 15.4572ZM15.4992 12.7526L16.087 11.9436L15.4992 11.5165L14.9115 11.9436L15.4992 12.7526ZM19.2219 15.4572L18.6341 16.2662L21.124 18.0753L20.1729 15.1482L19.2219 15.4572ZM17.8 11.081L17.2122 10.272L16.6244 10.699L16.8489 11.39L17.8 11.081ZM21.5226 8.37634L22.1104 9.18536L24.6003 7.37634H21.5226V8.37634ZM24.8327 10.3333C24.8327 15.488 20.654 19.6667 15.4993 19.6667V21.6667C21.7586 21.6667 26.8327 16.5926 26.8327 10.3333H24.8327ZM15.4993 1C20.654 1 24.8327 5.17868 24.8327 10.3333H26.8327C26.8327 4.07411 21.7586 -1 15.4993 -1V1ZM6.16602 10.3333C6.16602 5.17868 10.3447 1 15.4993 1V-1C9.24012 -1 4.16602 4.07411 4.16602 10.3333H6.16602ZM15.4993 19.6667C10.3447 19.6667 6.16602 15.488 6.16602 10.3333H4.16602C4.16602 16.5926 9.24012 21.6667 15.4993 21.6667V19.6667ZM14.5482 4.30913L15.9701 8.68536L17.8722 8.06732L16.4503 3.6911L14.5482 4.30913ZM15.0284 8.68536L16.4503 4.30913L14.5482 3.6911L13.1263 8.06732L15.0284 8.68536ZM9.47588 9.37634H14.0773V7.37634H9.47588V9.37634ZM13.7863 10.272L10.0637 7.56732L8.88809 9.18536L12.6107 11.89L13.7863 10.272ZM12.7277 15.7662L14.1496 11.39L12.2475 10.772L10.8255 15.1482L12.7277 15.7662ZM14.9115 11.9436L11.1888 14.6482L12.3644 16.2662L16.087 13.5616L14.9115 11.9436ZM19.8097 14.6482L16.087 11.9436L14.9115 13.5616L18.6341 16.2662L19.8097 14.6482ZM16.8489 11.39L18.2708 15.7662L20.1729 15.1482L18.751 10.772L16.8489 11.39ZM20.9348 7.56732L17.2122 10.272L18.3877 11.89L22.1104 9.18536L20.9348 7.56732ZM16.9212 9.37634H21.5226V7.37634H16.9212V9.37634Z"
                    mask="url(#path-3-inside-1_1184:16107)" />
            </g>
            <defs>
                <clipPath id="clip0_1184:16107">
                    <rect width="30" height="30" transform="translate(0.5)" />
                </clipPath>
            </defs>
        </symbol>



    </svg>
    <div class="page cabinet container">
        <aside class="sidebar">
            <div class="sidebar__logo">
                <img src="{{ asset('img/logo-cabinet.png') }}" alt="logo">
                <!-- Бургер кнопка -->
                <div class="burger__menu _close">
                    <img src="img/icons/menu-close.svg" alt="menu-open">
                </div>
                <!-- Бургер кнопка - END -->
            </div>
            <ul class="sidebar__menu">
                <li><a href="{{ route('profile') }}" class="sidebar__menu-link @if (Request::is('profile')) _active @endif">
                        <svg>
                            <use xlink:href="#_icon-cabinet-user"></use>
                        </svg>
                        <span>Личный кабинет</span>
                    </a></li>
                <li><a href="" class="sidebar__menu-link" >
                        <svg>
                            <use xlink:href="#_icon-cabinet-notific"></use>
                        </svg>
                        <span>Уведомления</span>
                        <span class="notific-total">4</span>
                    </a></li>
                <li><a href="" class="sidebar__menu-link">
                        <svg>
                            <use xlink:href="#_icon-cabinet-rating"></use>
                        </svg>
                        <span>Рейтинг</span>
                    </a></li>
                <li><a href="{{ route('createAuthor') }}" class="sidebar__menu-link @if (Request::is('profile/course/create_author')) _active @endif">
                        <svg>
                            <use xlink:href="#_icon-cabinet-courses"></use>
                        </svg>
                        <span>Курсы</span>
                    </a></li>
                <li><a href="" class="sidebar__menu-link _search-courses">
                        <svg viewBox="0 0 30 29" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.333333" y="0.333333" width="29.3333" height="22.6667" stroke-width="0.666667" />
                            <path
                                d="M10.6281 26.668H10.8601L10.9407 26.4504L11.4775 25.0013H18.5212L19.058 26.4504L19.1386 26.668H19.3706H22.9993V27.668H6.99935V26.668H10.6281Z"
                                stroke-width="0.666667" />
                            <circle cx="12.666" cy="9.99609" r="5.33333" stroke-width="1.33333" />
                            <rect x="17.2969" y="12.6641" width="7.18782" height="1.69038"
                                transform="rotate(40.4227 17.2969 12.6641)" />
                        </svg>
                        <span>Найти курс</span>
                    </a></li>
                <li><a href="" class="sidebar__menu-link">
                        <svg>
                            <use xlink:href="#_icon-cabinet-message"></use>
                        </svg>
                        <span>Сообщения</span>
                    </a></li>
            </ul>
            <ul class="sidebar__menu _bottom">
                <li><a href="{{ route('profileSettings') }}" class="sidebar__menu-link _settings @if (Request::is('profile/settings')) _active @endif">
                        <svg>
                            <use xlink:href="#_icon-cabinet-settings"></use>
                        </svg>
                        <span>Настройки</span>
                    </a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                      <a class="sidebar__menu-link _exit" onclick="this.parentNode.submit();">
                        <svg>
                            <use xlink:href="#_icon-cabinet-exit"></use>
                        </svg>
                        <span>Выход</span>
                    </a>
                    </form>

                </li>
            </ul>
        </aside>

        @yield('content')
    </div>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>

