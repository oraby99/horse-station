@extends('layout.app')
@section('body_class','page-template-default page page-id-8 logged-in admin-bar no-customize-support wp-custom-logo rtcl-account rtcl-page rtcl-no-js ehf-header ehf-footer ehf-template-classima ehf-stylesheet-classima header-style-2 footer-style-1 banner-enabled has-sidebar left-sidebar elementor-default elementor-kit-2161 elementor-page elementor-page-8')
@section('content')
<div id="primary" class="content-area classima-myaccount">
    <div class="container">
        <div id="post-8" class="post-8 page type-page status-publish">

            <div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2e91ada3 elementor-section-boxed elementor-section-height-default elementor-section-height-default rt-parallax-bg-no"
                    data-id="2e91ada3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78c3e29f"
                            data-id="78c3e29f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-50c3004f elementor-widget elementor-widget-shortcode"
                                    data-id="50c3004f" data-element_type="widget"
                                    data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="rtcl">
                                                <div class="rtcl-MyAccount-mobile-navbar">
                                                    <h4>Account Menu</h4>
                                                    <div class="rtcl-myaccount-logo">
                                                        <a href="{{route('home')}}">
                                                            <a class="light-logo"
                                                                href="{{route('home')}}">
                                                                <img decoding="async"
                                                                    src="https://codedhosting.com/alfuraij/wp-content/uploads/2021/04/logo-light.png"
                                                                    height="45" width="150"
                                                                    alt="Al Furaij Real Estate">
                                                            </a>
                                                        </a>
                                                    </div>
                                                    <div class="classima-MyAccount-open-menu"><span></span>
                                                    </div>
                                                    <div class="rtcl-MyAccount-open-menu"><span></span></div>

                                                    <nav class="rtcl-MyAccount-navigation">
                                                        <h3>@lang('lang.my_account')</h3>
                                                        <div class="rtcl-myaccount-logo">
                                                            <a class="light-logo"
                                                                href="{{route('home')}}">
                                                                <img loading="lazy" decoding="async"
                                                                    src="https://codedhosting.com/alfuraij/wp-content/uploads/2021/04/logo-light.png"
                                                                    height="45" width="150"
                                                                    alt="Al Furaij Real Estate">
                                                            </a>
                                                        </div>
                                                        <ul>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--dashboard is-active">
                                                                <a
                                                                    href="{{route('profile.main')}}">@lang('lang.dashboard')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--listings">
                                                                <a
                                                                    href="{{route('profile.listing')}}">@lang('lang.my_listing')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--favourites">
                                                                <a
                                                                    href="{{route('profile.favourite')}}">@lang('lang.favourite')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--chat rtcl-chat-unread-count">
                                                                <a
                                                                    href="{{route('profile.chat')}}">@lang('lang.chat')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--payments">
                                                                <a
                                                                    href="{{route('profile.payment')}}">@lang('lang.payment')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--edit-account">
                                                                <a
                                                                    href="{{route('profile.edit')}}">@lang('lang.account_details')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--logout">
                                                                <a
                                                                    href="{{route('logout')}}">@lang('lang.logout')</a>
                                                            </li>
                                                        </ul>
                                                    </nav>

                                                </div>
                                                <div class="rtcl-MyAccount-wrap">

                                                    <nav class="rtcl-MyAccount-navigation">
                                                        <h3>@lang('lang.my_account')</h3>
                                                        <div class="rtcl-myaccount-logo">
                                                            <a class="light-logo"
                                                                href="https://codedhosting.com/alfuraij/">
                                                                <img loading="lazy" decoding="async"
                                                                    src="https://codedhosting.com/alfuraij/wp-content/uploads/2021/04/logo-light.png"
                                                                    height="45" width="150"
                                                                    alt="Al Furaij Real Estate">
                                                            </a>
                                                        </div>
                                                        <ul>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--dashboard is-active">
                                                                <a
                                                                    href="{{route('profile.main')}}">@lang('lang.dashboard')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--listings">
                                                                <a
                                                                    href="{{route('profile.listing')}}">@lang('lang.my_listing')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--favourites">
                                                                <a
                                                                    href="{{route('profile.favourite')}}">@lang('lang.favourite')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--chat rtcl-chat-unread-count">
                                                                <a
                                                                    href="{{route('profile.chat')}}">@lang('lang.chat')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--payments">
                                                                <a
                                                                    href="{{route('profile.payment')}}">@lang('lang.payment')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--edit-account">
                                                                <a
                                                                    href="{{route('profile.edit')}}">@lang('lang.account_details')</a>
                                                            </li>
                                                            <li
                                                                class="rtcl-MyAccount-navigation-link rtcl-MyAccount-navigation-link--logout">
                                                                <a
                                                                    href="{{route('logout')}}">@lang('lang.logout')</a>
                                                            </li>
                                                        </ul>
                                                    </nav>


                                                    <div class="rtcl-MyAccount-content">
                                                        <div class="rtcl-user-info">
                                                            <div class="rtcl-user-content">
                                                                <div class="rtcl-user-content-inner">
                                                                    <div class="rtcl-user-avatar">
                                                                        <img alt=''
                                                                            src='
                                                                            @if(auth()->user()->image == null)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										    @else
                                										    https://admin.alfuraij.com/uploads/users/{{auth()->user()->image}}
                                										    @endif
																            '
                                                                            srcset='
                                                                            @if(auth()->user()->image == null)
                                										    https://admin.alfuraij.com/assets/images/default.jpg
                                										    @else
                                										    https://admin.alfuraij.com/uploads/users/{{auth()->user()->image}}
                                										    @endif
                                                                            '
                                                                            class='avatar avatar-96 photo'
                                                                            height='96' width='96' />
                                                                    </div>
                                                                    <div class="rtcl-user-details">
                                                                        <h5>{{auth()->user()->name}}</h5>
                                                                        <p class="rtcl-media-heading">
                                                                            <strong>@lang('lang.email')</strong> :
                                                                            {{auth()->user()->email}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rtcl-listing-statistics">
                                                            <div class="rtcl-listing-count">
                                                                <div class="rtcl-listing-count-inner">
                                                                    <div class="rtcl-listing-icon total-icon">
                                                                        <svg width="28" height="32"
                                                                            viewBox="0 0 28 32" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M27.4051 3.47826C27.4051 1.55757 25.8297 0 23.8869 0C19.0134 0 9.05821 0 4.18474 0C2.24197 0 0.666504 1.55757 0.666504 3.47826V28.5217C0.666504 30.4424 2.24197 32 4.18474 32H23.8869C25.8297 32 27.4051 30.4424 27.4051 28.5217V3.47826ZM25.9978 3.47826V28.5217C25.9978 29.6744 25.0528 30.6087 23.8869 30.6087H4.18474C3.0188 30.6087 2.0738 29.6744 2.0738 28.5217C2.0738 22.7012 2.0738 9.29878 2.0738 3.47826C2.0738 2.32557 3.0188 1.3913 4.18474 1.3913H23.8869C25.0528 1.3913 25.9978 2.32557 25.9978 3.47826Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M5.09421 8.14403L6.50151 9.53533C6.77593 9.80733 7.22204 9.80733 7.49647 9.53533L10.3111 6.75272C10.5855 6.48142 10.5855 6.04037 10.3111 5.76907C10.0366 5.49777 9.59052 5.49777 9.3161 5.76907L6.99899 8.05985L6.08917 7.16038C5.81475 6.88907 5.36863 6.88907 5.09421 7.16038C4.81979 7.43168 4.81979 7.87272 5.09421 8.14403Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M5.09421 13.7092L6.50151 15.1005C6.77593 15.3726 7.22204 15.3726 7.49647 15.1005L10.3111 12.3179C10.5855 12.0466 10.5855 11.6056 10.3111 11.3343C10.0366 11.063 9.59052 11.063 9.3161 11.3343L6.99899 13.6251L6.08917 12.7256C5.81475 12.4543 5.36863 12.4543 5.09421 12.7256C4.81979 12.9969 4.81979 13.4379 5.09421 13.7092Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M5.09421 19.2745L6.50151 20.6658C6.77593 20.9378 7.22204 20.9378 7.49647 20.6658L10.3111 17.8832C10.5855 17.6119 10.5855 17.1708 10.3111 16.8995C10.0366 16.6282 9.59052 16.6282 9.3161 16.8995L6.99899 19.1903L6.08917 18.2908C5.81475 18.0195 5.36863 18.0195 5.09421 18.2908C4.81979 18.5621 4.81979 19.0032 5.09421 19.2745Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M5.09421 24.8397L6.50151 26.231C6.77593 26.503 7.22204 26.503 7.49647 26.231L10.3111 23.4484C10.5855 23.1771 10.5855 22.736 10.3111 22.4647C10.0366 22.1934 9.59052 22.1934 9.3161 22.4647L6.99899 24.7555L6.08917 23.856C5.81475 23.5847 5.36863 23.5847 5.09421 23.856C4.81979 24.1273 4.81979 24.5684 5.09421 24.8397Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M12.6288 8.34783H22.4798C22.8683 8.34783 23.1835 8.03617 23.1835 7.65217C23.1835 7.26817 22.8683 6.95652 22.4798 6.95652H12.6288C12.2404 6.95652 11.9251 7.26817 11.9251 7.65217C11.9251 8.03617 12.2404 8.34783 12.6288 8.34783Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M12.6288 13.913H22.4798C22.8683 13.913 23.1835 13.6014 23.1835 13.2174C23.1835 12.8334 22.8683 12.5217 22.4798 12.5217H12.6288C12.2404 12.5217 11.9251 12.8334 11.9251 13.2174C11.9251 13.6014 12.2404 13.913 12.6288 13.913Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M12.6288 19.4783H22.4798C22.8683 19.4783 23.1835 19.1666 23.1835 18.7826C23.1835 18.3986 22.8683 18.087 22.4798 18.087H12.6288C12.2404 18.087 11.9251 18.3986 11.9251 18.7826C11.9251 19.1666 12.2404 19.4783 12.6288 19.4783Z"
                                                                                fill="#FF3C48" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M12.6288 25.0435H22.4798C22.8683 25.0435 23.1835 24.7318 23.1835 24.3478C23.1835 23.9638 22.8683 23.6522 22.4798 23.6522H12.6288C12.2404 23.6522 11.9251 23.9638 11.9251 24.3478C11.9251 24.7318 12.2404 25.0435 12.6288 25.0435Z"
                                                                                fill="#FF3C48" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rtcl-listing-number">
                                                                        <h5>@lang('lang.total_listing')</h5>
                                                                        <span>{{auth()->user()->advertisment->count()}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rtcl-listing-count">
                                                                <div class="rtcl-listing-count-inner">
                                                                    <div
                                                                        class="rtcl-listing-icon published-icon">
                                                                        <svg width="33" height="32"
                                                                            viewBox="0 0 33 32" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M16.932 1.01001C16.2753 0.358644 15.4019 1.14028e-06 14.473 1.14028e-06C13.5442 1.14028e-06 12.6708 0.358644 12.014 1.00977C11.357 1.66113 10.9953 2.52686 10.9953 3.44775C10.9953 4.14868 11.2054 4.81714 11.5949 5.38379L4.82391 21.822C4.40283 21.6465 3.94654 21.5542 3.47597 21.5542C2.54738 21.5542 1.67394 21.9126 1.01696 22.5637C-0.338864 23.9082 -0.33911 26.0955 1.01696 27.4399L4.59786 30.9902C5.2546 31.6414 6.12803 32 7.05687 32C7.98595 32 8.85913 31.6414 9.51587 30.9902C10.1726 30.3391 10.5343 29.4731 10.5346 28.5522C10.5346 28.0857 10.4413 27.6333 10.2642 27.2158L13.708 25.8215L15.0539 27.156C15.9168 28.0115 17.2598 28.4924 18.5484 28.4924C19.1315 28.4924 19.7035 28.394 20.2147 28.187L23.5154 26.8503C24.428 26.4807 25.0473 25.7976 25.2143 24.9758C25.3812 24.1543 25.0773 23.2864 24.38 22.5952L23.5957 21.8176L26.8437 20.5024C27.4154 20.8887 28.0897 21.0969 28.7966 21.0969C29.7252 21.0969 30.5989 20.7383 31.2556 20.0872C32.6115 18.7427 32.6115 16.5552 31.2556 15.2109L16.932 1.01001ZM21.5698 20.6125C21.5666 20.6138 21.5634 20.6152 21.5602 20.6165L13.5809 23.8477C13.5777 23.8489 13.5745 23.8501 13.5715 23.8513L9.0714 25.6736L6.37945 23.0046L13.0199 6.8833L25.3312 19.0896L21.5698 20.6125ZM8.17851 29.6646C7.87908 29.9614 7.48065 30.125 7.05687 30.125C6.63308 30.125 6.23465 29.9614 5.93497 29.6643L2.35407 26.1143C1.73551 25.501 1.73551 24.5029 2.35407 23.8896C2.65375 23.5925 3.05218 23.429 3.47597 23.429C3.89976 23.429 4.29818 23.5928 4.59786 23.8899L8.17851 27.4399C8.47819 27.7371 8.64342 28.1321 8.64342 28.552C8.64318 28.9724 8.47819 29.3672 8.17851 29.6646ZM23.0429 23.9211C23.2844 24.1606 23.4002 24.4102 23.3603 24.6055C23.3206 24.801 23.1165 24.9866 22.8003 25.1145L19.4996 26.4512C18.5607 26.8313 17.1084 26.541 16.3913 25.8303L15.6067 25.0527L21.6966 22.5867L23.0429 23.9211ZM29.9183 18.7612C29.6186 19.0583 29.2204 19.2219 28.7969 19.2219C28.3731 19.2219 27.9742 19.0581 27.6745 18.7612L13.3511 4.56006C13.0515 4.26318 12.8865 3.86817 12.8865 3.448C12.8865 3.02783 13.0515 2.63281 13.3511 2.33569C13.6508 2.03858 14.0492 1.875 14.473 1.875C14.8968 1.875 15.2952 2.03858 15.5949 2.33569L29.9183 16.5366C30.5368 17.1501 30.5368 18.1479 29.9183 18.7612Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M27.006 6.16064C27.2478 6.16064 27.4899 6.06909 27.6746 5.88599L31.9969 1.60059C32.3663 1.23438 32.3663 0.64087 31.9969 0.274659C31.6276 -0.0915518 31.0289 -0.0915518 30.6598 0.274659L26.3372 4.56006C25.9681 4.92627 25.9681 5.51978 26.3372 5.88599C26.5219 6.06909 26.764 6.16064 27.006 6.16064Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M22.7089 3.32031C22.9509 3.32031 23.193 3.22876 23.3777 3.04565L24.8355 1.60034C25.2048 1.23437 25.2048 0.640869 24.8355 0.274658C24.4663 -0.0915527 23.8675 -0.0915527 23.4981 0.274658L22.0403 1.71997C21.6712 2.08594 21.6712 2.67944 22.0403 3.04565C22.225 3.22876 22.4671 3.32031 22.7089 3.32031Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M30.6599 7.375L29.2021 8.82056C28.8328 9.18677 28.8328 9.78027 29.2021 10.1465C29.3868 10.3296 29.6286 10.4209 29.8707 10.4209C30.1127 10.4209 30.3548 10.3293 30.5392 10.1465L31.997 8.70093C32.3664 8.33472 32.3664 7.74121 31.997 7.375C31.6276 7.00903 31.029 7.00903 30.6599 7.375Z"
                                                                                fill="#FF3C48" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rtcl-listing-number">
                                                                        <h5>@lang('lang.publish_listing')</h5>
                                                                        <span>{{$abroveAds}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rtcl-listing-count">
                                                                <div class="rtcl-listing-count-inner">
                                                                    <div class="rtcl-listing-icon pending-icon">
                                                                        <svg width="30" height="30"
                                                                            viewBox="0 0 30 30" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.6187 4.52942C17.6187 4.43305 17.5997 4.33763 17.563 4.24859C17.5262 4.15956 17.4723 4.07866 17.4043 4.01052C17.3363 3.94238 17.2556 3.88832 17.1668 3.85145C17.078 3.81457 16.9828 3.79559 16.8867 3.79559H4.07397C3.87984 3.79559 3.69366 3.8729 3.5564 4.01052C3.41913 4.14814 3.34201 4.33479 3.34201 4.52942C3.34201 4.72404 3.41913 4.9107 3.5564 5.04832C3.69366 5.18594 3.87984 5.26325 4.07397 5.26325H16.8867C16.9828 5.26325 17.078 5.24427 17.1668 5.20739C17.2556 5.17051 17.3363 5.11646 17.4043 5.04832C17.4723 4.98018 17.5262 4.89928 17.563 4.81025C17.5997 4.72121 17.6187 4.62579 17.6187 4.52942Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M14.8658 8.94294C14.8658 8.74832 14.7887 8.56168 14.6514 8.42408C14.5142 8.28647 14.328 8.20916 14.1339 8.20916H4.07397C3.88097 8.21089 3.69646 8.28897 3.56059 8.42641C3.42473 8.56385 3.3485 8.74952 3.3485 8.94302C3.3485 9.13653 3.42473 9.3222 3.56059 9.45964C3.69646 9.59708 3.88097 9.67516 4.07397 9.67689H14.1339C14.23 9.67689 14.3252 9.6579 14.414 9.62102C14.5028 9.58413 14.5835 9.53007 14.6515 9.46191C14.7194 9.39375 14.7734 9.31284 14.8101 9.2238C14.8469 9.13475 14.8658 9.03932 14.8658 8.94294Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M4.07397 12.6227C3.87984 12.6227 3.69366 12.7 3.5564 12.8376C3.41913 12.9752 3.34201 13.1619 3.34201 13.3565C3.34201 13.5511 3.41913 13.7378 3.5564 13.8754C3.69366 14.013 3.87984 14.0903 4.07397 14.0903H9.1599C9.35403 14.0903 9.5402 14.013 9.67747 13.8754C9.81474 13.7378 9.89186 13.5511 9.89186 13.3565C9.89186 13.1619 9.81474 12.9752 9.67747 12.8376C9.5402 12.7 9.35403 12.6227 9.1599 12.6227H4.07397Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M30 17.236C30 12.6551 26.2827 8.92819 21.7134 8.92819C17.1442 8.92819 13.4269 12.6551 13.4269 17.236C13.4269 21.3407 16.4116 24.7591 20.3194 25.4257V28.2024C20.3193 28.2898 20.2846 28.3736 20.223 28.4354C20.1613 28.4972 20.0777 28.532 19.9905 28.5321H1.79297C1.70579 28.532 1.6222 28.4972 1.56055 28.4354C1.49891 28.3736 1.46423 28.2898 1.46414 28.2024V1.79758C1.46423 1.71017 1.49891 1.62637 1.56055 1.56456C1.6222 1.50276 1.70579 1.468 1.79297 1.4679H19.9905C20.0777 1.468 20.1613 1.50276 20.223 1.56456C20.2846 1.62637 20.3193 1.71017 20.3194 1.79758V6.31125C20.3194 6.50588 20.3965 6.69253 20.5338 6.83015C20.671 6.96777 20.8572 7.04508 21.0513 7.04508C21.2455 7.04508 21.4316 6.96777 21.5689 6.83015C21.7062 6.69253 21.7833 6.50588 21.7833 6.31125V1.79758C21.7828 1.32098 21.5937 0.86405 21.2576 0.527047C20.9214 0.190044 20.4657 0.000497619 19.9903 0H1.79297C1.31759 0.000482096 0.861822 0.190024 0.525679 0.52703C0.189537 0.864036 0.000480861 1.32098 0 1.79758V28.2024C0.000480861 28.679 0.189537 29.136 0.525679 29.473C0.861822 29.81 1.31759 29.9995 1.79297 30H19.9905C20.4659 29.9995 20.9217 29.81 21.2578 29.473C21.594 29.1359 21.783 28.679 21.7835 28.2024V25.543C26.3203 25.5052 30 21.7936 30 17.236ZM21.7134 24.076C20.364 24.076 19.045 23.6748 17.923 22.9232C16.801 22.1716 15.9265 21.1033 15.4101 19.8534C14.8937 18.6036 14.7586 17.2282 15.0219 15.9014C15.2851 14.5745 15.9349 13.3557 16.8891 12.3991C17.8433 11.4424 19.0589 10.791 20.3824 10.5271C21.7059 10.2631 23.0777 10.3986 24.3244 10.9163C25.571 11.434 26.6366 12.3107 27.3863 13.4356C28.136 14.5605 28.5361 15.8829 28.5361 17.2358C28.5341 19.0493 27.8146 20.788 26.5355 22.0703C25.2565 23.3526 23.5223 24.074 21.7134 24.076Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M25.6028 16.5022H22.4454V13.3368C22.4437 13.1433 22.3658 12.9583 22.2288 12.8221C22.0917 12.6859 21.9065 12.6094 21.7135 12.6094C21.5205 12.6094 21.3353 12.6859 21.1982 12.8221C21.0611 12.9583 20.9832 13.1433 20.9815 13.3368V17.236C20.9816 17.4203 21.0508 17.5978 21.1754 17.7332C21.3001 17.8686 21.471 17.952 21.6542 17.9669C21.6739 17.9689 21.6937 17.9699 21.7134 17.9699H25.6028C25.7969 17.9699 25.9831 17.8926 26.1203 17.7549C26.2576 17.6173 26.3347 17.4307 26.3347 17.236C26.3347 17.0414 26.2576 16.8548 26.1203 16.7171C25.9831 16.5795 25.7969 16.5022 25.6028 16.5022Z"
                                                                                fill="#FF3C48" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rtcl-listing-number">
                                                                        <h5>@lang('lang.pending_listings')</h5>
                                                                        <span>{{$NotabroveAds}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rtcl-listing-count">
                                                                <div class="rtcl-listing-count-inner">
                                                                    <div class="rtcl-listing-icon expired-icon">
                                                                        <svg width="35" height="30"
                                                                            viewBox="0 0 35 30" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M33.923 25.2475L19.8267 1.51572C19.2714 0.580806 18.2583 0 17.1829 0C16.1074 0 15.0943 0.580806 14.5389 1.51579L0.442691 25.2475C-0.131258 26.2139 -0.14824 27.4245 0.398324 28.4071C0.945022 29.3896 1.97506 30 3.08658 30H31.2792C32.3907 30 33.4208 29.3896 33.9675 28.407C34.514 27.4244 34.4971 26.2137 33.923 25.2475ZM32.0192 27.2902C31.8687 27.5606 31.5852 27.7287 31.2792 27.7287H3.08658C2.78057 27.7287 2.49699 27.5607 2.34657 27.2902C2.19608 27.0197 2.20078 26.6864 2.35872 26.4205L16.4551 2.68864C16.608 2.43129 16.8869 2.27137 17.1829 2.27137C17.4789 2.27137 17.7578 2.43129 17.9107 2.68864L32.0069 26.4205C32.165 26.6865 32.1697 27.0197 32.0192 27.2902Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M17.1933 9.34495C16.3422 9.34495 15.678 9.80855 15.678 10.6304C15.678 13.138 15.9685 16.7414 15.9685 19.2491C15.9686 19.9023 16.5291 20.1762 17.1933 20.1762C17.6915 20.1762 18.3973 19.9023 18.3973 19.2491C18.3973 16.7415 18.6878 13.1381 18.6878 10.6304C18.6878 9.80862 18.0029 9.34495 17.1933 9.34495Z"
                                                                                fill="#FF3C48" />
                                                                            <path
                                                                                d="M17.2141 21.6302C16.3008 21.6302 15.6157 22.3678 15.6157 23.2529C15.6157 24.1169 16.3008 24.8755 17.2141 24.8755C18.0652 24.8755 18.7918 24.1169 18.7918 23.2529C18.7918 22.3678 18.0652 21.6302 17.2141 21.6302Z"
                                                                                fill="#FF3C48" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rtcl-listing-number">
                                                                        <h5>@lang('lang.expire_listing')</h5>
                                                                        <span>{{$expireAds}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rtcl-membership-statistics-report">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>
@endsection
