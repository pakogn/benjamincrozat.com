<x-app
    title="Sponsor me and get your company in the spotlight."
    description="More than 35,000 eager developers visit my blog each month. Why don't you introduce your brand?"
    :hide-navigation="true"
    :hide-footer="true"
>
    <nav class="container flex items-center justify-between mt-4 lg:max-w-screen-md">
        <x-logo />

        <a wire:navigate.hover href="{{ route('home') }}" class="underline">
            Back to the blog →
        </a>
    </nav>

    <div
        class="!h-[175px] md:!h-[200px] container flex items-end justify-center gap-2 md:gap-4 mt-16 md:mt-24 md:max-w-screen-sm"
        x-data="{ animate: false }"
    >
        <div
            class="w-8 h-0 transition-all duration-500 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent delay-0"
            x-bind:class="{ '!h-[25px] md:!h-[50px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-75 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent"
            x-bind:class="{ '!h-[50px] md:!h-[75px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-100 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent"
            x-bind:class="{ '!h-[75px] md:!h-[100px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-150 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent"
            x-bind:class="{ '!h-[100px] md:!h-[125px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-200 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent"
            x-bind:class="{ '!h-[125px] md:!h-[150px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-300 rounded-t-lg md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 to-transparent"
            x-bind:class="{ '!h-[150px] md:!h-[175px]': animate }"
            x-intersect="animate = true"
        ></div>

        <div
            class="w-8 h-0 transition-all duration-500 delay-[400ms] md:w-16 bg-gradient-to-b from-blue-400 via-cyan-300 rounded-md to-transparent"
            x-bind:class="{ '!h-[175px] md:!h-[200px]': animate }"
            x-intersect="animate = true"
        ></div>
    </div>

    <x-section class="container mt-8 text-center md:mt-12">
        <x-slot:title tag="h1" class="!text-3xl sm:!text-4xl md:!text-5xl font-bold">
            <span class="font-bold text-transparent bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text">
                Get your company in the&nbsp;spotlight.
            </span>
        </x-slot:title>

        <p class="mt-4 text-xl md:text-2xl md:mt-2 lg:text-3xl">
            More than <span class="font-semibold text-transparent bg-gradient-to-r from-indigo-300 to-indigo-400 bg-clip-text">35,000</span> eager developers visit&nbsp;my&nbsp;blog&nbsp;each&nbsp;month.
        </p>

        <div class="mt-16">
            <a href="https://benjamincrozat.pirsch.io/?domain=benjamincrozat.com&interval=30d&scale=day" target="_blank" rel="nofollow noopener" class="inline-block px-6 py-3 font-bold transition-opacity bg-gray-200 rounded hover:opacity-75">
                Access my analytics dashboard
            </a>
        </div>
    </x-section>

    <x-section class="container mt-24 md:mt-32">
        <x-slot:title class="text-2xl sm:!text-3xl font-bold text-center">
            These people trust me
        </x-slot:title>

        <x-sponsors class="justify-center" />
    </x-section>

    <div class="mt-24 bg-gradient-to-r from-gray-200/30 to-gray-200/10 md:mt-32">
        <div class="container lg:max-w-screen-md">
            <div class="py-8 md:flex md:items-center md:gap-8">
                <img loading="lazy" src="{{ Vite::asset('resources/img/sebastian.jpg') }}" width="96" height="96" class="flex-shrink-0 aspect-square w-[96px] order-2 h-[96px] rounded-full mx-auto" alt="Sebastian Schlein" />

                <blockquote class="order-1 mt-6 md:text-xl md:mt-0">
                    Benjamin is overtaking us on some Google search results, so I'm jumping on board before he raises his prices.

                    <cite class="block mt-8">
                        Sebastian Schlein, co-founder of <a href="https://beyondco.de" class="text-indigo-400 underline">Beyond Code</a>.
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>

    <x-section class="container mt-24 md:mt-32">
        <x-slot:title class="text-2xl sm:!text-3xl font-bold text-center">
            My blog by the numbers
        </x-slot:title>

        <div class="grid grid-cols-2 gap-16 mt-16 md:grid-cols-3">
            <div class="col-span-1" x-data="{ count: 0, target: 35000 }" x-intersect.half="animateNumber">
                <div class="text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">+<span x-text="Math.round(count).toLocaleString()">35,000</span></div>
                <div class="text-indigo-400">monthly visitors</div>
            </div>

            <div class="col-span-1" x-data="{ count: 0, target: 58000 }" x-intersect.half="animateNumber">
                <div class="text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">+<span x-text="Math.round(count).toLocaleString()">58,000</span></div>
                <div class="text-indigo-400">monthly page views</div>
            </div>

            <div class="col-span-1" x-data="{ count: 0, target: 38000 }" x-intersect.half="animateNumber">
                <div class="text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">+<span x-text="Math.round(count).toLocaleString()">38,000</span></div>
                <div class="text-indigo-400">monthly sessions</div>
            </div>

            <div class="col-span-1" x-data="{ count: 0, target: 70 }" x-intersect.half="animateNumber">
                <div class="text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">+<span x-text="Math.round(count).toLocaleString()">70</span>%</div>
                <div class="text-indigo-400">visitors on desktop</div>
            </div>

            <div class="col-span-1" x-data="{ count: 0, target: 4200 }" x-intersect.half="animateNumber">
                <div class="text-3xl sm:text-5xl lg:text-6xl xl:text-7xl">+<span x-text="Math.round(count).toLocaleString()">4200</span></div>
                <div class="text-indigo-400">followers on X</div>
            </div>

            <div class="col-span-1">
                <div class="text-xl sm:text-2xl xl:text-3xl">
                    India, Indonesia, United States, Germany, United Kingdom
                </div>

                <div class="text-indigo-400">
                    in the top 5 countries
                </div>
            </div>
        </div>
    </x-section>

    <script>
        function animateNumber() {
            const duration = 1000

            const stepTime = 20

            const steps = duration / stepTime

            const increment = this.target / steps

            const interval = setInterval(() => {
                if (this.count < this.target) {
                    this.count += increment

                    if (this.count > this.target) {
                        this.count = this.target
                    }
                } else {
                    clearInterval(interval)
                }
            }, stepTime)
        }
    </script>

    <div class="container grid gap-16 mt-24 text-xl sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center md:mt-32">
        <div class="flex flex-col h-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512.001 512.001" class="h-32 mx-auto"><path fill="#dbeafe" d="M420.818 326.609H91.182v-16.33c0-39.392 31.934-71.326 71.326-71.326h186.986c39.392 0 71.326 31.934 71.326 71.326v16.33h-.002zM179.583 100.652h152.839v138.3H179.583z"/><path fill="#182454" d="M349.492 224.544h-2.666V100.652c0-7.957-6.451-14.409-14.409-14.409h-149.33c-25.357-5.738-44.355-28.437-44.355-55.503v-1.921h234.537v1.921c0 10.023-2.637 19.872-7.624 28.48-3.99 6.886-1.643 15.702 5.244 19.692 6.886 3.993 15.702 1.643 19.692-5.244 7.529-12.994 11.507-27.837 11.507-42.928V14.41c0-7.958-6.451-14.41-14.41-14.41H124.323c-7.958 0-14.409 6.452-14.409 14.409v16.33c0 37.453 23.267 68.463 55.26 79.742v114.062h-2.666c-47.275 0-85.735 38.46-85.735 85.735v16.33c0 7.957 6.451 14.409 14.409 14.409h110.611l40.234 160.085c1.61 6.405 7.369 10.898 13.974 10.898s12.365-4.491 13.974-10.898l31.147-123.928c1.939-7.718-2.744-15.548-10.463-17.487-7.718-1.947-15.548 2.744-17.487 10.463L256 438.474l-24.493-97.457H420.82c7.958 0 14.409-6.452 14.409-14.409v-16.33c-.002-47.274-38.461-85.734-85.737-85.734zm-155.5-109.483h124.016v109.483H193.992V115.061zM406.409 312.2H105.591v-1.921c0-31.383 25.533-56.917 56.917-56.917h186.985c31.383 0 56.917 25.533 56.917 56.917v1.921z"/></svg>

            <p class="flex-grow mt-8 font-bold">
                Pin your link and logo<br />
                on my homepage and the footer
            </p>

            <p class="text-center">
                <x-button href="#display" class="mt-4 px-3 !py-2 text-sm font-bold bg-blue-600 text-white">
                    Learn more
                </x-button>
            </p>
        </div>

        <div class="flex flex-col h-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="h-32 mx-auto"><path fill="#dbeafe" d="M427.366 326.983 498.348 256l-70.982-70.983zM326.983 84.634 256 13.652l-70.982 70.982zM185.018 427.366 256 498.348l70.983-70.982zM84.635 185.017 13.652 256l70.983 70.983z"/><g fill="#182454"><path d="M340.577 426.239c-.005-.071-.004-.141-.011-.212-.059-.605-.167-1.195-.303-1.775-.029-.124-.063-.247-.096-.371-.153-.579-.333-1.147-.557-1.693-.007-.016-.01-.031-.016-.048-.003-.007-.005-.012-.008-.019-.051-.12-.109-.235-.162-.352-.113-.253-.231-.501-.358-.744-.068-.13-.141-.257-.213-.384-.135-.24-.278-.474-.427-.704-.067-.102-.132-.206-.202-.309-.455-.661-.964-1.275-1.519-1.84-.071-.071-.143-.141-.216-.21-.217-.212-.441-.415-.672-.61-.089-.075-.177-.152-.269-.225-.259-.209-.526-.408-.799-.598-.056-.038-.109-.082-.165-.119-.315-.212-.643-.407-.976-.592-.127-.07-.257-.134-.385-.201-.223-.115-.448-.224-.677-.326-.147-.066-.294-.131-.444-.191-.258-.105-.52-.199-.784-.287-.115-.038-.228-.083-.344-.119-.359-.111-.726-.202-1.096-.283-.138-.029-.277-.053-.415-.079-.278-.052-.56-.094-.844-.128-.131-.016-.262-.033-.395-.045-.411-.037-.825-.063-1.242-.063H98.286V185.018c0-.419-.026-.833-.063-1.244-.012-.13-.029-.258-.044-.388-.034-.287-.078-.572-.131-.855-.025-.135-.048-.27-.076-.404-.082-.377-.175-.749-.287-1.115-.031-.102-.071-.202-.105-.304-.091-.276-.191-.549-.299-.818-.057-.143-.12-.284-.183-.425-.106-.239-.22-.474-.34-.706-.061-.12-.121-.242-.187-.359-.187-.339-.386-.67-.602-.992-.027-.041-.059-.079-.086-.12-.201-.291-.412-.573-.635-.849-.066-.082-.134-.16-.201-.24-.206-.244-.42-.481-.644-.709-.06-.061-.119-.124-.18-.186-.572-.565-1.195-1.081-1.865-1.54-.087-.06-.176-.116-.265-.173-.246-.161-.498-.314-.756-.459-.113-.064-.227-.128-.341-.188-.268-.141-.542-.272-.82-.396-.094-.042-.186-.089-.28-.128-.012-.004-.022-.011-.034-.015-.027-.011-.056-.016-.083-.027-.532-.217-1.083-.392-1.646-.541-.131-.034-.261-.07-.392-.101-.576-.134-1.16-.242-1.762-.3-.078-.008-.154-.005-.231-.012-.367-.029-.736-.056-1.11-.056-.149 0-.292.018-.44.022-.169.005-.336.014-.505.026-.552.037-1.095.101-1.626.202-.037.007-.075.01-.113.018-.594.117-1.167.284-1.731.476-.12.041-.239.086-.358.131-.513.192-1.014.408-1.498.658-.055.029-.112.052-.167.081-.52.279-1.014.598-1.491.939-.123.086-.242.177-.36.269-.461.354-.906.726-1.319 1.136-.015.015-.033.026-.048.041l-70.983 70.98c-5.331 5.331-5.331 13.975 0 19.308l66.983 66.983v94.729c0 7.539 6.113 13.652 13.652 13.652h94.73l66.983 66.984c2.561 2.56 6.033 3.999 9.653 3.999s7.092-1.439 9.653-3.999l70.981-70.983c.005-.005.011-.014.016-.021.422-.423.805-.883 1.17-1.36.085-.112.169-.223.25-.336.347-.483.67-.986.953-1.513.02-.04.037-.082.057-.121.261-.498.483-1.017.681-1.548.041-.111.083-.218.12-.329.195-.569.363-1.149.482-1.749.005-.027.007-.055.012-.081.105-.542.168-1.098.206-1.66.011-.164.019-.326.025-.49.005-.15.023-.296.023-.448.004-.378-.022-.752-.052-1.125zM32.958 256l38.024-38.024v76.046L32.958 256zM256 479.04l-38.024-38.024h76.047L256 479.04zm252.002-232.693-66.983-66.984V84.634c0-7.539-6.113-13.652-13.652-13.652h-94.73L265.653 3.999C263.092 1.439 259.621 0 256 0c-3.62 0-7.092 1.439-9.653 3.999l-66.983 66.984h-94.73c-7.539 0-13.652 6.113-13.652 13.652 0 7.539 6.113 13.652 13.652 13.652h329.081v228.694c0 .419.026.833.063 1.244.012.13.029.258.044.388.034.287.078.572.131.855.025.135.048.27.076.404.082.377.175.749.287 1.115.031.102.071.202.105.304.091.276.191.549.299.818.057.143.12.284.183.425.106.239.22.474.34.706.061.12.121.242.187.359.187.339.386.67.602.992.027.041.059.079.086.12.201.291.412.573.635.849.066.082.134.16.201.24.206.244.421.481.644.709.06.061.119.124.18.186.572.565 1.195 1.081 1.865 1.54.087.06.176.116.265.173.246.161.498.314.756.459.113.064.227.128.341.188.268.141.542.272.82.396.094.042.186.089.28.128.012.004.022.011.034.015.109.045.221.076.33.117.302.116.602.231.913.326.157.048.317.081.475.121.272.072.541.149.819.203.263.053.527.085.792.12.176.025.349.06.528.078.455.045.909.07 1.362.07.456 0 .912-.025 1.365-.07.199-.02.393-.059.59-.086.242-.035.486-.063.726-.112.272-.055.536-.128.801-.199.162-.042.326-.076.487-.126.273-.083.539-.184.805-.284.152-.056.304-.104.455-.167.246-.102.482-.221.719-.337.165-.079.333-.152.494-.238.209-.112.407-.239.609-.362.182-.109.367-.212.543-.33.176-.117.341-.25.511-.375.19-.141.384-.273.567-.423.164-.135.315-.285.472-.427.171-.154.347-.299.511-.461l70.981-70.981c5.339-5.327 5.339-13.973.008-19.304zM217.976 70.983 256 32.958l38.024 38.024h-76.048zm223.042 223.04v-76.046l38.024 38.024-38.024 38.022z"/><path d="M256 199.76c-24.841 0-45.051-20.21-45.051-45.051 0-7.539 6.113-13.652 13.652-13.652s13.652 6.113 13.652 13.652c0 9.786 7.962 17.747 17.747 17.747 9.786 0 17.747-7.962 17.747-17.747s-7.962-17.747-17.747-17.747c-7.539 0-13.652-6.113-13.652-13.652s6.113-13.652 13.652-13.652c24.841 0 45.051 20.21 45.051 45.051S280.841 199.76 256 199.76zm101.269 58.699H154.731c-7.539 0-13.652-6.113-13.652-13.652s6.113-13.652 13.652-13.652h202.537c7.539 0 13.652 6.113 13.652 13.652s-6.112 13.652-13.651 13.652zm0 62.115H154.731c-7.539 0-13.652-6.113-13.652-13.652 0-7.539 6.113-13.652 13.652-13.652h202.537c7.539 0 13.652 6.113 13.652 13.652 0 7.539-6.112 13.652-13.651 13.652zm-95.624 62.116H154.733c-7.539 0-13.652-6.113-13.652-13.652 0-7.539 6.113-13.652 13.652-13.652h106.913c7.539 0 13.652 6.113 13.652 13.652-.001 7.539-6.114 13.652-13.653 13.652z"/></g></svg>

            <p class="flex-grow mt-8 font-bold">
                Write about your business
            </p>

            <p class="text-center">
                <x-button href="#write" class="mt-4 px-3 !py-2 text-sm font-bold bg-blue-600 text-white">
                    Learn more
                </x-button>
            </p>
        </div>

        <div class="flex flex-col h-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512.001 512.001" class="h-32 mx-auto"><path fill="#dbeafe" d="m390.591 13.429-134.59 50.578 79.354 104.422L429.49 62.242l-38.899-48.813zM82.512 62.24l94.135 106.188 79.354-104.422-134.59-50.577L82.512 62.24z"/><path fill="#182454" d="M439.991 53.874 401.093 5.061C397.465.509 391.319-1.19 385.869.859L256.001 49.663 126.133.859c-5.448-2.048-11.598-.352-15.224 4.202L72.011 53.874c-4.067 5.104-3.877 12.392.453 17.276l94.135 106.188c2.553 2.88 6.214 4.52 10.047 4.52.168 0 .337-.003.508-.009 4.016-.152 7.752-2.093 10.184-5.293l4.881-6.422 22.755 26.144-40.302 244.799c-.783 4.755 1.042 9.565 4.782 12.602l68.08 55.318c2.467 2.005 5.468 3.007 8.468 3.007s6.001-1.002 8.468-3.007l68.08-55.318c3.74-3.039 5.564-7.847 4.782-12.602l-26.886-163.312c-.012-.077-.035-.148-.048-.224-.048-.265-.106-.524-.169-.781-.044-.18-.087-.36-.138-.536-.071-.246-.152-.485-.236-.725-.066-.187-.13-.372-.203-.555-.086-.214-.181-.422-.277-.63-.091-.197-.181-.393-.282-.585-.097-.184-.2-.361-.305-.54-.117-.201-.235-.401-.363-.596-.107-.162-.222-.32-.336-.478-.138-.192-.277-.384-.426-.569-.125-.154-.256-.302-.388-.451-.15-.171-.301-.342-.459-.505-.15-.154-.307-.301-.466-.447-.152-.142-.303-.285-.462-.419-.181-.154-.369-.298-.559-.442-.148-.113-.293-.227-.446-.333-.211-.148-.428-.283-.647-.419-.144-.089-.285-.18-.432-.263-.231-.13-.469-.25-.706-.367-.149-.074-.297-.149-.45-.216-.236-.105-.477-.199-.72-.29-.169-.064-.337-.129-.509-.187-.227-.075-.458-.14-.689-.203-.2-.055-.399-.109-.602-.154-.209-.047-.423-.085-.636-.121-.232-.04-.465-.079-.7-.107-.197-.023-.397-.039-.596-.054-.252-.019-.504-.034-.759-.039-.082-.001-.161-.012-.243-.012h-34.207c-7.416 0-13.428 6.012-13.428 13.428s6.012 13.428 13.428 13.428h22.81l23.768 144.376L256 481.272l-53.565-43.523 38.37-233.068h42.792c3.885 0 7.579-1.683 10.129-4.612l26.055-29.937 4.881 6.423c2.432 3.2 6.169 5.143 10.184 5.293.169.007.338.009.508.009 3.832 0 7.494-1.64 10.047-4.52l94.135-106.188c4.331-4.883 4.522-12.173.455-17.275zm-264.142 93.414-75.801-85.507 25.777-32.347 108.577 40.802-58.553 77.052zm101.635 30.536h-42.966l-25.703-29.532L256.001 86.2l47.186 62.093-25.703 29.531zm58.669-30.536-58.554-77.052 108.577-40.802 25.777 32.347-75.8 85.507z"/></svg>

            <p class="flex-grow mt-8 font-bold">
                Need a custom deal?
            </p>

            <p class="text-center">
                <x-button href="mailto:hello@benjamincrozat.com" class="mt-4 px-3 !py-2 text-sm font-bold bg-green-500 text-white">
                    Reach out
                </x-button>
            </p>
        </div>
    </div>

    <x-section id="display" class="container mt-24 scroll-mt-4 md:mt-32 lg:max-w-screen-md">
        <x-slot:title class="text-2xl sm:!text-3xl font-bold text-center">
            Pin your link and logo<br />
            on my homepage and the footer
        </x-slot:title>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Get more targeted traffic
                </h3>

                <p class="mt-2">
                    <strong class="font-medium">My audience is exclusively made of English-speaking web developers</strong> from all over the world.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><circle cx="283.823" cy="283.824" r="143.032" fill="#dbeafe"/><path fill="#182454" d="M283.823 441.791c-87.104 0-157.967-70.863-157.967-157.967s70.863-157.967 157.967-157.967S441.79 196.72 441.79 283.824s-70.864 157.967-157.967 157.967zm0-286.058c-70.629 0-128.091 57.461-128.091 128.091s57.461 128.091 128.091 128.091 128.091-57.461 128.091-128.091-57.46-128.091-128.091-128.091z"/><path fill="#dbeafe" d="M283.823 210.506c40.493 0 73.318 32.825 73.318 73.318s-32.825 73.318-73.318 73.318-73.318-32.825-73.318-73.318"/><path fill="#182454" d="M283.823 372.079c-48.665 0-88.256-39.59-88.256-88.256 0-8.25 6.688-14.938 14.938-14.938s14.938 6.688 14.938 14.938c0 32.19 26.189 58.38 58.38 58.38s58.38-26.189 58.38-58.38-26.189-58.38-58.38-58.38c-8.25 0-14.938-6.688-14.938-14.938s6.688-14.938 14.938-14.938c48.665 0 88.256 39.59 88.256 88.256s-39.59 88.256-88.256 88.256z"/><path fill="#dbeafe" d="m107.881 55.068-5.267 47.545-47.546 5.268-40.13-40.129 52.814-52.814z"/><path fill="#182454" d="M283.823 55.647c-57.543 0-110.171 21.421-150.353 56.696l-15.219-15.219 4.477-40.412c.499-4.508-1.077-9-4.284-12.207L78.316 4.374c-5.833-5.832-15.292-5.832-21.127 0L4.375 57.189c-5.833 5.833-5.833 15.292 0 21.127l40.128 40.128c2.817 2.816 6.624 4.375 10.563 4.375.547 0 1.096-.03 1.646-.091l40.414-4.477 15.219 15.219c-35.276 40.18-56.698 92.809-56.698 150.353C55.647 409.641 158.006 512 283.823 512c66.164 0 129.001-28.684 172.401-78.697 5.408-6.231 4.738-15.666-1.492-21.073-6.234-5.409-15.667-4.738-21.073 1.492-37.722 43.47-92.334 68.402-149.835 68.402-109.342 0-198.3-88.956-198.3-198.3 0-49.306 18.093-94.463 47.983-129.191L273.73 294.857c2.917 2.916 6.74 4.375 10.563 4.375s7.647-1.459 10.563-4.375c5.833-5.833 5.833-15.292 0-21.127L154.631 133.506c34.73-29.89 79.886-47.983 129.192-47.983 109.344 0 198.3 88.956 198.3 198.3 0 8.25 6.688 14.938 14.938 14.938s14.938-6.688 14.938-14.938C512 158.008 409.64 55.647 283.823 55.647zM36.063 67.752l31.688-31.688 24.492 24.492-3.161 28.529-28.529 3.161-24.49-24.494z"/></svg>
        </div>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Boost your rankings on Google
                </h3>

                <p class="mt-2">
                    Even in 2023, <strong class="font-medium">links are more important than ever for Google</strong>. If you are in the software business, getting some from this blog will benefit you.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><path fill="#dbeafe" d="m352.233 211.394-68.984-102.438-68.984 102.438h35.434v265.837h67.099V211.394z"/><path fill="#182454" d="M509.524 333.999 440.54 231.562c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411l-68.983 102.437c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v106.071h-49.095v-236.79h20.909c5.368 0 10.299-2.961 12.822-7.701 2.521-4.741 2.224-10.484-.774-14.937l-68.984-102.438c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411L202.217 203.28c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v236.789h-49.095v-62.47h20.909c8.02 0 14.524-6.504 14.524-14.524s-6.504-14.524-14.524-14.524h-35.433c-8.02 0-14.524 6.504-14.524 14.524v76.994h-38.049v-76.994c0-8.02-6.504-14.524-14.524-14.524h-8.142l41.692-61.913 20.131 29.895c4.482 6.654 13.509 8.412 20.161 3.935 6.654-4.481 8.415-13.508 3.935-20.161l-32.178-47.783c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411l-68.983 102.44c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v62.47H29.048V34.767c0-8.02-6.504-14.524-14.524-14.524S0 26.747 0 34.767v442.465c0 8.02 6.504 14.524 14.524 14.524h447.518c8.02 0 14.524-6.504 14.524-14.524s-6.504-14.524-14.524-14.524h-52.576V342.113c0-8.02-6.504-14.524-14.524-14.524H386.8l41.692-61.911 41.693 61.911h-8.142c-8.02 0-14.524 6.504-14.524 14.524v78.011c0 8.02 6.504 14.524 14.524 14.524s14.524-6.504 14.524-14.524v-63.487h20.909c5.368 0 10.299-2.961 12.822-7.701 2.521-4.74 2.223-10.484-.774-14.937zm-245.3 128.708V211.394c0-8.02-6.504-14.524-14.524-14.524h-8.142l41.692-61.911 41.693 61.911H316.8c-8.02 0-14.524 6.504-14.524 14.524v251.313h-38.052z"/></svg>
        </div>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Support a content creator
                </h3>

                <p class="mt-2">
                    Writing all this content takes time and money. <strong class="font-medium">Your kind sponsorship will help me keep this boat afloat.</strong>
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512.003 512.003" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><path fill="#dbeafe" d="m287.7553804 155.268199 81.9302628-81.9302628 129.8525511 129.8525511-81.9302628 81.9302628zM94.3935722 285.1189354l-81.9302628-81.9302628L142.3158605 73.3361215l81.9302628 81.9302628z"/><path fill="#182454" d="M508.35 194.371 378.498 64.52c-4.866-4.867-12.758-4.867-17.625 0l-73.116 73.116-14.389-14.387c-2.337-2.337-5.507-3.65-8.813-3.65s-6.476 1.314-8.813 3.65l-22.945 22.944-81.67-81.67c-4.867-4.868-12.758-4.867-17.625 0L3.65 194.371C1.314 196.709 0 199.879 0 203.184c0 3.305 1.314 6.476 3.65 8.813l81.928 81.928c2.434 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.218 8.813-3.65l52.052-52.052 26.539 26.539c.304.304.621.59.946.855 4.895 3.993 12.115 3.708 16.679-.855l56.58-56.58 120.662 120.662-13.04 13.04-103.495-103.495c-4.867-4.867-12.758-4.866-17.627 0-.304.304-.59.621-.855.947-3.993 4.895-3.708 12.117.855 16.679l123.807 123.806-13.04 13.04-123.806-123.807c-4.867-4.867-12.758-4.867-17.627 0-4.867 4.867-4.867 12.758 0 17.626L315.33 393.826l-13.04 13.04-7.669-7.669c-.003-.003-.004-.005-.006-.007l-95.821-95.82c-1.216-1.216-2.622-2.13-4.123-2.738-1.501-.608-3.095-.912-4.69-.912-2.79 0-5.582.932-7.867 2.795-.327.267-.642.551-.947.855-1.216 1.216-2.129 2.622-2.737 4.123-.304.75-.532 1.524-.684 2.309-.076.393-.133.789-.171 1.185-.343 3.574.855 7.27 3.593 10.008l43.504 43.504 43.504 43.504-13.04 13.04L140.18 306.086c-4.867-4.867-12.758-4.867-17.627 0-4.867 4.867-4.867 12.758 0 17.626l123.769 123.769c2.434 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.218 8.813-3.65L285.8 425.63l7.675 7.675c2.434 2.434 5.623 3.65 8.813 3.65s6.38-1.216 8.813-3.65l21.853-21.853 11.498 11.498c2.434 2.433 5.623 3.65 8.813 3.65s6.38-1.218 8.813-3.65l30.665-30.665c4.867-4.867 4.867-12.758 0-17.627l-11.498-11.498 21.853-21.853c4.867-4.867 4.867-12.758 0-17.627L264.814 185.394c-4.867-4.867-12.758-4.867-17.627 0l-56.579 56.58-9.17-9.17 83.119-83.119 14.387 14.387.001.001 3.157 3.157.437.437 126.258 126.257c2.433 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.216 8.813-3.65l81.928-81.928c2.337-2.337 3.65-5.507 3.65-8.813.002-3.304-1.313-6.474-3.651-8.812zM94.391 267.488l-64.303-64.303L142.314 90.959l64.303 64.303L94.391 267.488zm323.218 0L305.382 155.262l64.303-64.303 112.226 112.226-64.302 64.303z"/></svg>
        </div>
    </x-section>

    <div class="container mt-16 text-center md:max-w-screen-sm">
        <a href="https://benjamincrozat.lemonsqueezy.com/checkout/buy/46d80f6a-3631-492a-8e6b-0f42d288ccce?discount=0" class="inline-block px-6 py-3 font-bold text-white transition-opacity bg-orange-400 rounded hover:opacity-75">
            Get started for $79/month
        </a>

        <p class="mt-4 font-medium">
            Or simplify your accounting with <a href="https://benjamincrozat.lemonsqueezy.com/checkout/buy/54994675-a900-4693-99f0-22997bbd8441?discount=0" class="underline">yearly payments</a>.
        </p>

        <p class="mt-4 text-sm">Once the payment is done, you will receive instructions on how to send me your company name, logo, and landing page of choice.</p>
    </div>

    <x-section id="write" class="container mt-24 scroll-mt-4 md:mt-32 lg:max-w-screen-md">
        <x-slot:title class="text-2xl sm:!text-3xl font-bold text-center">
            Write about your business
        </x-slot:title>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Stay on top of other articles for an entire week
                </h3>

                <p class="mt-2">
                    <strong class="font-medium">From Monday to Sunday, you article will stay on top of every other article</strong> on this blog. In the homepage, in the "latest" page, and in the recommendations of every article.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><path fill="#dbeafe" d="M339.498 221.251 256 256.573l-83.498-35.322c-21.197-8.967-34.969-29.748-34.969-52.762V14.43h236.934v154.06c.001 23.013-13.772 43.794-34.969 52.761z"/><path fill="#182454" d="M422.661 145.973c-7.968 0-14.43-6.46-14.43-14.43V71.902c0-7.969 6.462-14.43 14.43-14.43s14.43 6.46 14.43 14.43v59.642c0 7.969-6.461 14.429-14.43 14.429zm-333.322 0c-7.968 0-14.43-6.46-14.43-14.43V71.902c0-7.969 6.462-14.43 14.43-14.43s14.43 6.46 14.43 14.43v59.642c0 7.969-6.461 14.429-14.43 14.429zm308.743 268.326h-69.924c-7.968 0-14.43 6.46-14.43 14.43 0 7.969 6.462 14.43 14.43 14.43h55.495v39.983H128.348v-39.983H260.34c7.968 0 14.43-6.46 14.43-14.43s-6.462-14.43-14.43-14.43h-81.964v-39.583h169.677c7.968 0 14.43-6.46 14.43-14.43s-6.462-14.43-14.43-14.43H303.59v-48.85c0-7.969-6.462-14.43-14.43-14.43s-14.43 6.46-14.43 14.43v48.85h-37.46v-81.54l13.108 5.545c1.798.76 3.71 1.14 5.622 1.14s3.824-.379 5.622-1.14l83.498-35.322c26.594-11.251 43.776-37.178 43.776-66.051V14.43c0-7.969-6.462-14.43-14.43-14.43H137.532c-7.968 0-14.43 6.46-14.43 14.43v154.06c0 28.875 17.183 54.802 43.776 66.051l41.531 17.569v93.747h-44.463c-7.968 0-14.43 6.46-14.43 14.43V414.3h-35.599c-7.968 0-14.43 6.46-14.43 14.43v68.842c0 7.969 6.462 14.43 14.43 14.43h284.164c7.968 0 14.43-6.46 14.43-14.43V428.73c0-7.971-6.461-14.431-14.429-14.431zm-246.12-245.81V28.859h208.075v139.63c0 17.255-10.268 32.749-26.161 39.472l-77.878 32.944-77.876-32.944c-15.891-6.723-26.16-22.217-26.16-39.472z"/></svg>
        </div>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Talk directly to thousands of developers
                </h3>

                <p class="mt-2">
                    Developers are constantly looking for <strong class="font-medium">innovative companies selling services that improve their productivity and allow them to buy their time back</strong>.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><circle cx="283.823" cy="283.824" r="143.032" fill="#dbeafe"/><path fill="#182454" d="M283.823 441.791c-87.104 0-157.967-70.863-157.967-157.967s70.863-157.967 157.967-157.967S441.79 196.72 441.79 283.824s-70.864 157.967-157.967 157.967zm0-286.058c-70.629 0-128.091 57.461-128.091 128.091s57.461 128.091 128.091 128.091 128.091-57.461 128.091-128.091-57.46-128.091-128.091-128.091z"/><path fill="#dbeafe" d="M283.823 210.506c40.493 0 73.318 32.825 73.318 73.318s-32.825 73.318-73.318 73.318-73.318-32.825-73.318-73.318"/><path fill="#182454" d="M283.823 372.079c-48.665 0-88.256-39.59-88.256-88.256 0-8.25 6.688-14.938 14.938-14.938s14.938 6.688 14.938 14.938c0 32.19 26.189 58.38 58.38 58.38s58.38-26.189 58.38-58.38-26.189-58.38-58.38-58.38c-8.25 0-14.938-6.688-14.938-14.938s6.688-14.938 14.938-14.938c48.665 0 88.256 39.59 88.256 88.256s-39.59 88.256-88.256 88.256z"/><path fill="#dbeafe" d="m107.881 55.068-5.267 47.545-47.546 5.268-40.13-40.129 52.814-52.814z"/><path fill="#182454" d="M283.823 55.647c-57.543 0-110.171 21.421-150.353 56.696l-15.219-15.219 4.477-40.412c.499-4.508-1.077-9-4.284-12.207L78.316 4.374c-5.833-5.832-15.292-5.832-21.127 0L4.375 57.189c-5.833 5.833-5.833 15.292 0 21.127l40.128 40.128c2.817 2.816 6.624 4.375 10.563 4.375.547 0 1.096-.03 1.646-.091l40.414-4.477 15.219 15.219c-35.276 40.18-56.698 92.809-56.698 150.353C55.647 409.641 158.006 512 283.823 512c66.164 0 129.001-28.684 172.401-78.697 5.408-6.231 4.738-15.666-1.492-21.073-6.234-5.409-15.667-4.738-21.073 1.492-37.722 43.47-92.334 68.402-149.835 68.402-109.342 0-198.3-88.956-198.3-198.3 0-49.306 18.093-94.463 47.983-129.191L273.73 294.857c2.917 2.916 6.74 4.375 10.563 4.375s7.647-1.459 10.563-4.375c5.833-5.833 5.833-15.292 0-21.127L154.631 133.506c34.73-29.89 79.886-47.983 129.192-47.983 109.344 0 198.3 88.956 198.3 198.3 0 8.25 6.688 14.938 14.938 14.938s14.938-6.688 14.938-14.938C512 158.008 409.64 55.647 283.823 55.647zM36.063 67.752l31.688-31.688 24.492 24.492-3.161 28.529-28.529 3.161-24.49-24.494z"/></svg>
        </div>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Get a valuable backlink, <strong>FOR LIFE</strong>
                </h3>

                <p class="mt-2">
                    <strong class="font-medium">Links are such an important ranking factor on Google.</strong> You want to accumulate as many as you can, and my blog is there to help you.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><path fill="#dbeafe" d="m352.233 211.394-68.984-102.438-68.984 102.438h35.434v265.837h67.099V211.394z"/><path fill="#182454" d="M509.524 333.999 440.54 231.562c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411l-68.983 102.437c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v106.071h-49.095v-236.79h20.909c5.368 0 10.299-2.961 12.822-7.701 2.521-4.741 2.224-10.484-.774-14.937l-68.984-102.438c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411L202.217 203.28c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v236.789h-49.095v-62.47h20.909c8.02 0 14.524-6.504 14.524-14.524s-6.504-14.524-14.524-14.524h-35.433c-8.02 0-14.524 6.504-14.524 14.524v76.994h-38.049v-76.994c0-8.02-6.504-14.524-14.524-14.524h-8.142l41.692-61.913 20.131 29.895c4.482 6.654 13.509 8.412 20.161 3.935 6.654-4.481 8.415-13.508 3.935-20.161l-32.178-47.783c-2.699-4.009-7.216-6.411-12.048-6.411s-9.349 2.402-12.048 6.411l-68.983 102.44c-2.998 4.453-3.297 10.197-.774 14.937 2.523 4.739 7.454 7.701 12.822 7.701h20.909v62.47H29.048V34.767c0-8.02-6.504-14.524-14.524-14.524S0 26.747 0 34.767v442.465c0 8.02 6.504 14.524 14.524 14.524h447.518c8.02 0 14.524-6.504 14.524-14.524s-6.504-14.524-14.524-14.524h-52.576V342.113c0-8.02-6.504-14.524-14.524-14.524H386.8l41.692-61.911 41.693 61.911h-8.142c-8.02 0-14.524 6.504-14.524 14.524v78.011c0 8.02 6.504 14.524 14.524 14.524s14.524-6.504 14.524-14.524v-63.487h20.909c5.368 0 10.299-2.961 12.822-7.701 2.521-4.74 2.223-10.484-.774-14.937zm-245.3 128.708V211.394c0-8.02-6.504-14.524-14.524-14.524h-8.142l41.692-61.911 41.693 61.911H316.8c-8.02 0-14.524 6.504-14.524 14.524v251.313h-38.052z"/></svg>
        </div>

        <div class="flex items-center justify-between gap-8 mt-8 md:gap-12">
            <div>
                <h3 class="text-xl font-bold">
                    Support a content creator
                </h3>

                <p class="mt-2">
                    Writing all this content takes time and money. Your kind sponsorship will help me keep this boat afloat.
                </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512.003 512.003" class="flex-shrink-0 w-16 h-16 md:w-24 md:h-24"><path fill="#dbeafe" d="m287.7553804 155.268199 81.9302628-81.9302628 129.8525511 129.8525511-81.9302628 81.9302628zM94.3935722 285.1189354l-81.9302628-81.9302628L142.3158605 73.3361215l81.9302628 81.9302628z"/><path fill="#182454" d="M508.35 194.371 378.498 64.52c-4.866-4.867-12.758-4.867-17.625 0l-73.116 73.116-14.389-14.387c-2.337-2.337-5.507-3.65-8.813-3.65s-6.476 1.314-8.813 3.65l-22.945 22.944-81.67-81.67c-4.867-4.868-12.758-4.867-17.625 0L3.65 194.371C1.314 196.709 0 199.879 0 203.184c0 3.305 1.314 6.476 3.65 8.813l81.928 81.928c2.434 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.218 8.813-3.65l52.052-52.052 26.539 26.539c.304.304.621.59.946.855 4.895 3.993 12.115 3.708 16.679-.855l56.58-56.58 120.662 120.662-13.04 13.04-103.495-103.495c-4.867-4.867-12.758-4.866-17.627 0-.304.304-.59.621-.855.947-3.993 4.895-3.708 12.117.855 16.679l123.807 123.806-13.04 13.04-123.806-123.807c-4.867-4.867-12.758-4.867-17.627 0-4.867 4.867-4.867 12.758 0 17.626L315.33 393.826l-13.04 13.04-7.669-7.669c-.003-.003-.004-.005-.006-.007l-95.821-95.82c-1.216-1.216-2.622-2.13-4.123-2.738-1.501-.608-3.095-.912-4.69-.912-2.79 0-5.582.932-7.867 2.795-.327.267-.642.551-.947.855-1.216 1.216-2.129 2.622-2.737 4.123-.304.75-.532 1.524-.684 2.309-.076.393-.133.789-.171 1.185-.343 3.574.855 7.27 3.593 10.008l43.504 43.504 43.504 43.504-13.04 13.04L140.18 306.086c-4.867-4.867-12.758-4.867-17.627 0-4.867 4.867-4.867 12.758 0 17.626l123.769 123.769c2.434 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.218 8.813-3.65L285.8 425.63l7.675 7.675c2.434 2.434 5.623 3.65 8.813 3.65s6.38-1.216 8.813-3.65l21.853-21.853 11.498 11.498c2.434 2.433 5.623 3.65 8.813 3.65s6.38-1.218 8.813-3.65l30.665-30.665c4.867-4.867 4.867-12.758 0-17.627l-11.498-11.498 21.853-21.853c4.867-4.867 4.867-12.758 0-17.627L264.814 185.394c-4.867-4.867-12.758-4.867-17.627 0l-56.579 56.58-9.17-9.17 83.119-83.119 14.387 14.387.001.001 3.157 3.157.437.437 126.258 126.257c2.433 2.434 5.623 3.65 8.813 3.65 3.189 0 6.38-1.216 8.813-3.65l81.928-81.928c2.337-2.337 3.65-5.507 3.65-8.813.002-3.304-1.313-6.474-3.651-8.812zM94.391 267.488l-64.303-64.303L142.314 90.959l64.303 64.303L94.391 267.488zm323.218 0L305.382 155.262l64.303-64.303 112.226 112.226-64.302 64.303z"/></svg>
        </div>
    </x-section>

    <div class="container mt-16 text-center md:max-w-screen-sm">
        <a href="https://benjamincrozat.lemonsqueezy.com/checkout/buy/cc173e8e-bafe-48a2-a406-b42b68a7150d" class="inline-block px-6 py-3 font-bold text-white transition-opacity bg-orange-400 rounded hover:opacity-75">
            Get started for $499
        </a>

        <p class="mt-4 text-sm">Once the payment is done, you will receive instructions on how to send me your content.</p>
    </div>

    <x-section id="about" class="container mt-32 mb-16 lg:max-w-screen-md">
        <x-slot:title class="text-2xl sm:!text-3xl font-bold text-center">
            Who you are sponsoring
        </x-slot:title>

        <x-prose class="mt-8">
            {!! Str::markdown(file_get_contents(resource_path('markdown/about.md'))) !!}
        </x-prose>
    </x-section>
</x-app>
