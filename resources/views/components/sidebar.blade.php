<div class="mt-3">
    <h2 class="text-center">{{config("app.name")}}</h2>
    <hr>
    <div class="mt-4">
        <a href={{ url("/admin" )}} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                         width="24"
                         height="24" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M46.13,48.86,45.9,21.3,25,.53,4.08,21.29l-.2,27.57H21.59V36.7h6.82V48.86ZM18.59,33.7V45.86H6.9l.18-23.31L25,4.76l17.91,17.8.19,23.3H31.41V33.7Z"
                            fill="#000000"></path>
                    </svg>
                </div>
                <div class="pl-3">
                    Home
                </div>
            </div>
        </a>
        <a href={{ url("/admin/orders" )}} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M12 2a7 7 0 0 1 7 7h1.074a1 1 0 0 1 .997.923l.846 11a1 1 0 0 1-.92 1.074L20.92 22H3.08a1 1 0 0 1-1-1l.003-.077.846-11A1 1 0 0 1 3.926 9H5a7 7 0 0 1 7-7zm7.147 9H4.852l-.693 9H19.84l-.693-9zM14 13v2h-4v-2h4zm-2-9a5 5 0 0 0-4.995 4.783L7 9h10a5 5 0 0 0-4.783-4.995L12 4z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Orders
                </div>
            </div>
        </a>
        <a href={{ url("/admin/products") }} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Products
                </div>
            </div>
        </a>
        <a href={{ url("/admin/customers") }} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Customers
                </div>
            </div>
        </a>
        <a href={{ url("/admin/categories" )}} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M22 20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v16zm-11-5H4v4h7v-4zm9-4h-7v8h7v-8zm-9-6H4v8h7V5zm9 0h-7v4h7V5z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Categories
                </div>
            </div>
        </a>

        <a href={{ url("/admin/tags" )}} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Tags
                </div>
            </div>
        </a>

        <a href={{ url("/admin/analytics" )}} class="sidebar-link-a">
            <div class="d-flex align-items-center rounded-lg py-2 px-3 cursor-pointer sidebar-link">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0H24V24H0z"/>
                        <path
                            d="M5 3v16h16v2H3V3h2zm15.293 3.293l1.414 1.414L16 13.414l-3-2.999-4.293 4.292-1.414-1.414L13 7.586l3 2.999 4.293-4.292z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    Analytics
                </div>
            </div>
        </a>
    </div>
</div>
