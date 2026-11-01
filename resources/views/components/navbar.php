
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/95 backdrop-blur-md border-b-[1.5px] border-primary">

    <div class="w-full px-margin h-16 flex items-center justify-between">

        <!-- Logo and Navigation -->
        <div class="flex items-center gap-space-xl">

            <!-- Logo -->
            <div class="flex items-center gap-space-sm">

                <img
                    src="/stockify/public/assets/images/logo.png"
                    alt="stockon logo"
                    class="h-8 w-auto object-contain"
                >

                <span class="font-headline-sm text-headline-sm text-primary font-bold lowercase tracking-tight">
                   
                </span>

            </div>

            <!-- Navigation Menu -->
            <nav
                class="hidden lg:flex items-center gap-space-sm"
                data-active-classes="bg-primary text-on-primary rounded-full px-space-md py-space-xs font-label-md text-label-md shadow-[2px_2px_0px_#000000]"
            >

                <a
                    href="#"
                    data-path="overview"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Overview
                </a>

                <a
                    href="#"
                    data-path="inventory"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Inventory
                </a>

                <a
                    href="#"
                    data-path="warehouses"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Warehouses
                </a>

                <a
                    href="#"
                    data-path="shipments"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Shipments
                </a>

                <a
                    href="#"
                    data-path="analytics"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Analytics
                </a>

                <a
                    href="#"
                    data-path="settings"
                    class="text-on-surface-variant hover:text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-all"
                >
                    Settings
                </a>

            </nav>

        </div>

        <!-- Right Navigation Actions -->
        <div class="flex items-center gap-space-md">

            <a
                href="#"
                data-path="help-docs"
                class="hidden sm:inline-block font-label-md text-label-md text-on-surface-variant hover:text-on-surface px-space-sm py-space-xs transition-colors"
            >
                Help &amp; Docs
            </a>

            <!-- Add Product Button -->
            <button
                type="button"
                class="flex items-center gap-space-xs bg-primary text-on-primary border-[1.5px] border-primary rounded-full px-space-md py-space-xs font-label-md text-label-md shadow-[2px_2px_0px_#000000] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all"
            >

                <span class="material-symbols-outlined text-[16px]">
                    add
                </span>

                <span>
                    Add Product
                </span>

            </button>

            <!-- User Profile -->
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center border-[1.5px] border-primary shadow-[2px_2px_0px_#000000]">

                <span class="material-symbols-outlined text-on-primary text-[18px]">
                    person
                </span>

            </div>

        </div>

    </div>

</header>
