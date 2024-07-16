<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                আপনার অনুভূতি প্রকাশ করুন
            </h2>
        </template>

        <div class="">
            <div class="grid-cols-7 gap-6 py-12 mx-auto space-y-6 max-w-5xl sm:px-6 lg:px-8 md:space-y-0 md:grid">
                <div class="col-span-5">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">
                            <div>
                                <img class="w-full h-auto" src="demo.jpg" alt="">
                            </div>
                            <div class="border-t border-b py-4">
                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                    আপনার অনুভূতি প্রকাশ করুন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 space-y-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <svg class="w-20 h-20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 80 80">
                                <path fill="url(#a)"
                                      d="M40 66.857c16.831 0 30.476-13.645 30.476-30.476C70.476 19.549 56.831 5.905 40 5.905S9.524 19.549 9.524 36.38c0 16.831 13.645 30.476 30.476 30.476Z"/>
                                <path fill="url(#b)"
                                      d="M40 66.857c16.831 0 30.476-13.645 30.476-30.476C70.476 19.549 56.831 5.905 40 5.905S9.524 19.549 9.524 36.38c0 16.831 13.645 30.476 30.476 30.476Z"
                                      opacity=".5"/>
                                <path fill="url(#c)"
                                      d="M40 66.857c16.831 0 30.476-13.645 30.476-30.476C70.476 19.549 56.831 5.905 40 5.905S9.524 19.549 9.524 36.38c0 16.831 13.645 30.476 30.476 30.476Z"
                                      opacity=".24"/>
                                <path fill="url(#d)"
                                      d="M40 63.829c9.542 0 17.276-5.57 17.276-12.438 0-6.87-7.734-12.439-17.276-12.439-9.541 0-17.276 5.57-17.276 12.439S30.459 63.829 40 63.829Z"/>
                                <path fill="url(#e)"
                                      d="M22.724 51.39c0 2.915 1.39 5.581 3.714 7.696-1.638-2.038-2.61-4.477-2.61-7.086 0-1.98.706-2.305 1.525-1.733 2.095 1.466 3.333-.267 5.847-1.6 2.534-1.315 5.543-9.715 8.781-9.715-9.524 0-17.257 5.581-17.257 12.439Z"/>
                                <path fill="url(#f)"
                                      d="M40 38.952c3.733 0 7.18 8.648 9.924 10.362 3.81 2.381 6.247-1.505 6.247 2.686 0 2.61-.952 5.048-2.61 7.086 2.325-2.115 3.715-4.8 3.715-7.695 0-6.858-7.733-12.439-17.276-12.439Z"/>
                                <path fill="url(#g)"
                                      d="M59.657 18.38c-.095 1.22-1.467 1.887-3.733 1.696-1.924-.152-6.057-1.543-8.686-5.524-.476-.724.381-1.047.857-.552 1.676 1.657 6.305 4 10.076 3.886 1.543-.058 1.486.495 1.486.495Z"/>
                                <path fill="url(#h)"
                                      d="M20.343 18.267c.095 1.219 1.466 1.885 3.733 1.695 1.924-.152 6.057-1.543 8.686-5.524.476-.724-.381-1.048-.857-.552-1.677 1.657-6.305 4-10.077 3.885-1.543-.038-1.485.496-1.485.496Z"/>
                                <path fill="url(#i)"
                                      d="M59.334 23.962a.68.68 0 0 0-.781-.514c-1.905.285-5.181 1.485-8.362 3.085-2.515 1.258-5.505 3.03-5.505 4.286 0 1.39 3.39 3.41 4.838 4.21 2.286 1.257 5.372 2.59 7.181 2.59.476 0 .724-.266.781-.533.095-.362-.133-.724-.571-.953-4.667-2.38-7.448-4.57-7.448-5.314 0 0-.057-.685 3.276-2.59 2.038-1.162 4.324-2.248 5.6-2.724.762-.286 1.124-1.029.99-1.543Z"/>
                                <path fill="url(#j)"
                                      d="M62.743 64.8s-.572-.19-1.467-.419c.02-1.62-1.238-3.41-2.971-3.41-1.181 0-2.02.724-3.029.99-.019-.113-.038-.247-.076-.361-.648-2.286-.571-10.952-.552-16.819-2.705-3.086-7.22-5.257-12.477-5.733l-2.152-.096-2.152.096c-5.257.476-9.79 2.647-12.476 5.733.038 5.867.114 14.533-.553 16.819v.02c-.838-.23-1.676-.934-2.895-.934-1.505 0-2.953 2.038-2.229 3.466a25.202 25.202 0 0 0-2.419.667c-1.428 0-5.01 1.143-5.01 3.314 0 1.753 2.877 3.905 6.191 3.296l.896-.153s1.085 1.562 4 2.02c2.152.342 4.285-.23 5.39-.82 0 0 1.048 1.22 4.857 1.39 1.524.058 2.21-.285 2.762-.57a4.473 4.473 0 0 0 3.6 1.809 4.518 4.518 0 0 0 3.352-1.486c1.162.933 3.372 2.095 5.772.114 1.562-1.295 2.952-1.333 2.952-1.333 1.105.59 2.686 1.771 4.933 1.771 3.086 0 4.63-2.59 4.63-2.59 2.113.8 4.647-1.257 4.647-3.429 0-2.171-2.096-3.352-3.524-3.352Z"/>
                                <path fill="url(#k)"
                                      d="M25.352 44.781c.038 5.867.114 14.533-.552 16.819-.286 1.01.095 1.6.685 1.943 1.162.705 27.848.705 29.01 0 .59-.343.972-.953.686-1.943-.648-2.286-.572-10.952-.553-16.819-2.704-3.086-7.219-5.257-12.476-5.733L40 38.952l-2.153.096c-5.257.476-9.79 2.647-12.495 5.733Z"/>
                                <path fill="url(#l)"
                                      d="M62.743 64.8s-7.772-2.514-10.59-.686l-9.563-2.628v5.428a4.531 4.531 0 0 0-2.647-.857c-.953 0-1.829.286-2.553.8v-7.771l-9.562 5.028c-2.8-1.828-10.59.686-10.59.686-1.429 0-5.01 1.143-5.01 3.314 0 1.753 2.877 3.905 6.19 3.295l.896-.152s1.086 1.562 4 2.02c2.152.342 4.286-.23 5.39-.82 0 0 1.048 1.22 4.858 1.39 1.524.058 2.21-.285 2.762-.57a4.473 4.473 0 0 0 3.6 1.809c.78 0 1.523-.19 2.152-.553.781-.419 1.714-.476 2.514-.114 1.2.514 2.762.667 4.438-.705.077-.057.134-.114.21-.171 1.219-.934 2.895-1.029 4.267-.305.914.476 2.038.914 3.41.914 3.085 0 4.628-2.59 4.628-2.59 2.114.8 4.647-1.257 4.647-3.429 0-2.171-2.019-3.333-3.447-3.333Z"/>
                                <path fill="#216B00"
                                      d="M44.076 56.571V44.21h-8.152v7.523l-3.41.934c0 .61 0 1.219-.019 1.847l-2.819-7.333c0 5.333-.514 15.18-3.714 17.695-3.2 2.514-5.562.762-7.543.686-3.62-.153-4.495 5.257 0 5.257.762 0 1.714-.076 2.971-.343a2.656 2.656 0 0 1 2.61.895c.686.82 1.98 1.01 3.752 1.01 1.22 0 2.324-.248 3.315-.895.819-.534 1.866-.477 2.59.171.324.286.705.514 1.2.705 1.657.648 3.22.514 4.381-.095a1.53 1.53 0 0 1 1.562.057c.667.438 1.657.666 3.01.666 3.314 0 3.6-2.571 2-4.971s-1.734-7.848-1.734-11.448Z"/>
                                <path fill="#216B00"
                                      d="M61.58 65.562c-1.98.076-4.342 1.828-7.542-.686-3.2-2.514-3.715-12.362-3.715-17.695l-2.819 7.333c0-.61-.019-1.238-.019-1.847l-4.228-.953c-.381 14.229 2.914 20.629 8.762 20.629 1.619 0 2.742-.324 3.371-.915.705-.666 1.657-1.009 2.629-.857 1.466.229 2.762.248 3.58.248 4.496 0 3.62-5.41-.018-5.257Z"/>
                                <path fill="url(#m)"
                                      d="M32.342 42.99c-2.704 1.562-5.371 4.438-5.18 7.543.418 7.086.628 9.715-2.21 10.438-.953.248-2.02-1.333-3.467-1.333-2.305 0-4.076 5.848 1.581 5.848 2.667 0 9.295 2.057 9.276-22.496Z"/>
                                <path fill="url(#n)"
                                      d="M28.819 57.486c-.343 4-3.962 6.285-5.238 6.59-1.029.248-2.934.133-4.248-1.943-.228 1.6.629 3.352 3.733 3.352 1.677 0 4.896.8 7.067-4.59-.495-2.857-1.105-5.657-1.314-3.41Z"/>
                                <path fill="url(#o)"
                                      d="M32.648 54.133c2.761 14.229-10.724 15.924-14.229 15.924-4.495 0-3.62-5.41 0-5.257 1.98.076 4.343 1.828 7.543-.686 3.2-2.514 3.714-12.362 3.714-17.695l2.972 7.714Z"/>
                                <path fill="url(#p)"
                                      d="M32.514 51.923c0 6.572-.248 13.791-4.914 13.791-3.79 0-5.677 6.286.152 6.286s9.067-9.238 9.067-21.257l-4.305 1.18Z"/>
                                <path fill="url(#q)"
                                      d="M35.924 53.905c0 4.152-.496 8.343-2.096 10.743-1.6 2.4-2.095 5.733.99 6.933 3.62 1.428 6.8-.972 6.115-3.543-.686-2.571-1.276-9.81-.952-16.61v-7.98h-4.076l.019 10.457Z"/>
                                <path fill="url(#r)"
                                      d="M47.638 42.99a7.234 7.234 0 0 1 4.438 7.124c-.324 5.105-.381 11.962 2.476 11.962 1.371 0 2.305-1.105 3.771-1.105 3.276 0 4.877 6.458-.743 5.886-5.561-.552-9.942.686-9.942-23.867Z"/>
                                <path fill="url(#s)"
                                      d="M57.562 66.876c2.971.305 3.924-1.353 3.676-2.99-1.771.266-2.724.895-3.58.895-6.61 0-6.896-10.153-7.087-12.134L48 53.371c1.143 13.81 4.952 13.029 9.562 13.505Z"/>
                                <path fill="url(#t)"
                                      d="M46.97 49.771c0 4.877.42 14.876 3.544 14.876s1.752-3.961.228-3.961c-1.523 0-1.542-3.353-1.542-13.124l-2.23 2.21Z"/>
                                <path fill="url(#u)"
                                      d="M47.352 54.133c-1.333 15.562 10.724 15.924 14.229 15.924 4.495 0 3.619-5.41 0-5.257-1.981.076-4.343 1.828-7.543-.686-3.2-2.514-3.715-12.362-3.715-17.695l-2.971 7.714Z"/>
                                <path fill="url(#v)"
                                      d="M44.076 55.81c0 3.6.114 9.047 1.714 11.447 1.6 2.4 1.315 4.971-2 4.971-3.314 0-4.514-1.37-3.828-3.942.686-2.572-1.105-5.6-.743-17.029.21-4.971 1.029-8.171.781-7.81h4.076V55.81Z"/>
                                <path fill="url(#w)"
                                      d="M47.258 46.267c.247 8.266.495 19.447 5.161 19.447 3.79 0 5.677 6.286-.152 6.286s-8.59-11.676-8.19-25.352l3.18-.381Z"/>
                                <path fill="url(#x)"
                                      d="M26.38 68.267c-.266-.02.82-2.553.458-2.477-3.18.724-3.124 2.667-4.533 3.067-3.143.895-5.524.915-6.857-1.962-.4 1.467.438 3.181 2.952 3.181 1.524-.019 4.876-.324 7.98-1.81Z"/>
                                <path fill="url(#y)"
                                      d="M39.962 68.286c.685-2.572-1.086-5.924-.724-17.353-.743 9.048.38 12.286-.42 16.534-.342 1.847.02 3.01.858 3.733a8.08 8.08 0 0 0 .42-.343c-.382-.647-.42-1.504-.134-2.571Z"/>
                                <path fill="url(#z)"
                                      d="M33.829 64.648c.266-.4.514-.877.724-1.372.247-.724.476-1.486.704-2.247.495-2.134.667-4.629.667-7.124v-9.829a2.025 2.025 0 0 0-.952.038 2.138 2.138 0 0 0-1.562 2c-.172 7.067-1.505 19.6-5.829 19.6-3.79 0-5.676 6.286.152 6.286 1.81 0 3.448-1.6 4.877-4.171.114-1.067.571-2.21 1.219-3.181Z"/>
                                <path fill="url(#A)"
                                      d="M34.724 45.543c1.428 13.047-2.305 20.095-5.429 20.095s-2.61-4.229.229-6.095c2.628-1.715 2.476-6.724 2.362-13.79l2.838-.21Z"/>
                                <path fill="url(#B)"
                                      d="M34.724 45.543c1.429 13.047-2.133 19.104-5.257 19.104-3.124 0-2.781-3.238.076-5.104 2.629-1.715 2.476-6.724 2.362-13.79l2.819-.21Z"/>
                                <path fill="#216B00"
                                      d="M30.477 49.58c0 .439-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.609c.076-.038 1.485 0 1.58 0 .02 0 .02.172.02.61Z"/>
                                <path fill="#7CEC00"
                                      d="M29.677 49.924c.441 0 .8-.427.8-.953s-.359-.952-.8-.952c-.442 0-.8.426-.8.952s.358.953.8.953Z"/>
                                <path fill="#216B00"
                                      d="M42.953 58.057c0 .438-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.076-.038 1.485 0 1.58 0 .02 0 .02.172.02.61Z"/>
                                <path fill="#7CEC00"
                                      d="M42.153 58.4c.441 0 .8-.426.8-.952s-.359-.953-.8-.953c-.442 0-.8.427-.8.953s.358.952.8.952Z"/>
                                <path fill="#216B00"
                                      d="M49.905 63.867c0 .438-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.076-.038 1.486 0 1.581 0 .02 0 .02.172.02.61Z"/>
                                <path fill="url(#C)"
                                      d="M49.105 64.21c.442 0 .8-.427.8-.953s-.358-.952-.8-.952c-.442 0-.8.426-.8.952s.358.952.8.952Z"/>
                                <path fill="#216B00"
                                      d="M39.62 43.962c0 .438-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.076-.038 1.485 0 1.58 0 .02 0 .02.172.02.61Z"/>
                                <path fill="url(#D)"
                                      d="M38.82 44.305c.441 0 .8-.427.8-.953s-.359-.952-.8-.952c-.442 0-.8.426-.8.952s.358.953.8.953Z"/>
                                <path fill="#216B00"
                                      d="M50 48.171c0 .438-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.077-.037 1.486 0 1.581 0 .02 0 .02.172.02.61Z"/>
                                <path fill="url(#E)"
                                      d="M49.22 48.514c.441 0 .8-.426.8-.952s-.359-.953-.8-.953c-.442 0-.8.427-.8.953s.358.952.8.952Z"/>
                                <path fill="#216B00"
                                      d="M37.238 68.762c0 .438-.361.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.077-.038 1.486 0 1.581 0 .02.02.02.172.02.61Z"/>
                                <path fill="url(#F)"
                                      d="M36.458 69.124c.442 0 .8-.426.8-.953 0-.526-.358-.952-.8-.952-.442 0-.8.427-.8.953s.358.952.8.952Z"/>
                                <path fill="url(#G)"
                                      d="M15.085 61.257c-.59.572-2.647-.324-2.514 1.048.19 1.771 2.172 2.228 3.39 1.676 1.22-.552 1.753-1.58 1.524-2.59-.133-.572-1.066-1.41-2.4-.134Z"/>
                                <path fill="url(#H)"
                                      d="M17.448 62.4c-1.143 1.2-3.467 1.543-4.877-.152v.038c.19 1.771 2.172 2.228 3.39 1.676.8-.362 1.296-.933 1.487-1.562Z"/>
                                <path fill="url(#I)"
                                      d="M58.667 60.02c.61-.306 1.371.856 1.943-.21.743-1.41-.495-1.943-1.467-1.79-.971.152-1.447.533-1.79 1.352-.21.457-.077 1.314 1.314.647Z"/>
                                <path fill="#216B00"
                                      d="M50 48.171c0 .438-.362.8-.8.8a.805.805 0 0 1-.8-.8v-.61c.077-.037 1.486 0 1.581 0 .02 0 .02.172.02.61Z"/>
                                <path fill="url(#J)"
                                      d="M49.22 48.514c.441 0 .8-.426.8-.952s-.359-.953-.8-.953c-.442 0-.8.427-.8.953s.358.952.8.952Z"/>
                                <path fill="#216B00"
                                      d="M22.057 67.105c-.362.248-.8.229-1.01-.038-.21-.286-.076-.705.286-.971.286-.21.495-.343.495-.343.057.038.686.952.724 1.01-.019-.02-.152.075-.495.342Z"/>
                                <path fill="url(#K)"
                                      d="M22.533 66.743c-.419.305-.933.324-1.143.057-.21-.285-.019-.762.42-1.066.418-.305.933-.324 1.142-.058.19.286.02.762-.419 1.067Z"/>
                                <path fill="url(#L)"
                                      d="M54.648 44.781c-2.705-3.086-7.22-5.257-12.476-5.733l-2.153-.096-2.152.096c-5.257.476-9.79 2.647-12.476 5.733 0 1.086.019 2.267.019 3.486.628-1.277 2.685-3.467 3.638-3.143.952.324 1.295-1.562 3.047-.476 0 0 .248-2.324 3.429-2.248 2.038.057 3.467-.933 4.457-.8.914.114 3.162-.095 4.21.952 0 0 2.057-.19 3.333 1.296 0 0 2.38.038 3.276 1.428 0 0 2.61.324 3.848 3.295-.02-1.333-.02-2.61 0-3.79Z"/>
                                <path fill="#216B00"
                                      d="M34.077 57.81a.789.789 0 0 1-.82.761.789.789 0 0 1-.761-.819c0-.342.019-.61.019-.61.076-.018 1.485.039 1.58.039 0 .038 0 .19-.018.629Z"/>
                                <path fill="url(#M)"
                                      d="M34.096 57.219c-.02.533-.381.952-.82.933-.437-.019-.78-.457-.761-.971.019-.533.38-.953.819-.933.438.019.78.438.762.97Z"/>
                                <path fill="url(#N)"
                                      d="M60.59 59.79c.02-.057.057-.114.076-.152-.952.438-1.085-.533-1.828-.133-1.067.571-1.41.19-1.467-.248a.93.93 0 0 0-.057.133c-.19.458-.057 1.315 1.334.648.628-.324 1.39.838 1.942-.248Z"/>
                                <path fill="url(#O)"
                                      d="M58.553 23.467c-1.905.285-5.181 1.485-8.362 3.085-2.515 1.258-5.505 3.029-5.505 4.286 0 .8 1.143 1.829 2.381 2.686.057.038.095.057.133.095h.02c-1.01-1.371-1.448-2.857.495-4.267 1.238-.895 6.914-4.361 11.6-5.39-.077-.343-.4-.552-.762-.495Z"/>
                                <path fill="url(#P)"
                                      d="M57.505 37.086c.095-.362-.134-.724-.572-.953-4.667-2.38-7.448-4.57-7.448-5.314 0 0-.895 2.134 6 5.372.667.304 1.467.819 1.905 1.123a.644.644 0 0 0 .114-.228Z"/>
                                <path fill="url(#Q)"
                                      d="M20.667 23.962a.68.68 0 0 1 .78-.514c1.905.285 5.182 1.485 8.363 3.085 2.514 1.258 5.504 3.03 5.504 4.286 0 1.39-3.39 3.41-4.838 4.21-2.285 1.257-5.371 2.59-7.18 2.59-.477 0-.725-.266-.782-.533-.095-.362.134-.724.572-.953 4.666-2.38 7.447-4.57 7.447-5.314 0 0 .057-.685-3.276-2.59-2.038-1.162-4.324-2.248-5.6-2.724-.762-.286-1.124-1.029-.99-1.543Z"/>
                                <path fill="url(#R)"
                                      d="M21.448 23.467c1.905.285 5.18 1.485 8.362 3.085 2.514 1.258 5.505 3.029 5.505 4.286 0 .8-1.143 1.829-2.381 2.686-.057.038-.096.057-.134.095h-.019c1.01-1.371 1.448-2.857-.495-4.267-1.238-.895-6.914-4.361-11.6-5.39.076-.343.4-.552.762-.495Z"/>
                                <path fill="url(#S)"
                                      d="M22.496 37.086c-.096-.362.133-.724.571-.953 4.667-2.38 7.448-4.57 7.448-5.314 0 0 .895 2.134-6 5.372-.667.304-1.467.819-1.905 1.123a.644.644 0 0 1-.114-.228Z"/>
                                <defs>
                                    <linearGradient id="e" x1="22.715" x2="40" y1="49.026" y2="49.026"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <linearGradient id="f" x1="40" x2="57.285" y1="49.026" y2="49.026"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <linearGradient id="g" x1="54.509" x2="53.068" y1="21.151" y2="14.86"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#7A4400"/>
                                    </linearGradient>
                                    <linearGradient id="h" x1="25.555" x2="26.995" y1="21.073" y2="14.783"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#7A4400"/>
                                    </linearGradient>
                                    <linearGradient id="j" x1="37.598" x2="39.63" y1="35.505" y2="75.886"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="k" x1="22.156" x2="58.392" y1="51.514" y2="51.514"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#216B00"/>
                                        <stop offset=".147" stop-color="#2F9300"/>
                                        <stop offset=".855" stop-color="#2F9300"/>
                                        <stop offset=".9" stop-color="#2C8C00"/>
                                        <stop offset=".968" stop-color="#257700"/>
                                        <stop offset="1" stop-color="#216B00"/>
                                    </linearGradient>
                                    <linearGradient id="l" x1="39.238" x2="39.238" y1="54.706" y2="83.597"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="m" x1="26.167" x2="24.58" y1="54.159" y2="64.248"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="n" x1="25.329" x2="23.234" y1="56.269" y2="74.555"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="o" x1="28.668" x2="17.62" y1="57.009" y2="64.675"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="p" x1="30.412" x2="30.412" y1="52.544" y2="74.287"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="q" x1="36.993" x2="36.802" y1="48.666" y2="68.983"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="r" x1="51.226" x2="60.464" y1="55.546" y2="68.499"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="s" x1="54.929" x2="55.754" y1="62.158" y2="71.555"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#57C300" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="t" x1="49.267" x2="53.743" y1="56.109" y2="66.966"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="u" x1="52.974" x2="56.594" y1="52.982" y2="65.458"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="v" x1="41.285" x2="43.191" y1="46.922" y2="69.035"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="w" x1="48.597" x2="51.645" y1="48.106" y2="76.392"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="x" x1="23.936" x2="19.412" y1="71.634" y2="64.253"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#57C300" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="y" x1="39.279" x2="29.438" y1="61.398" y2="74.223"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#57C300" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="z" x1="32.244" x2="28.308" y1="55.032" y2="70.012"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="A" x1="31.285" x2="26.856" y1="58.478" y2="73.906"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#57C300" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="B" x1="34.746" x2="28.555" y1="47.608" y2="64.846"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="G" x1="15.729" x2="14.556" y1="65.883" y2="59.115"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="H" x1="14.833" x2="15.637" y1="64.197" y2="55.984"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="I" x1="57.902" x2="60.116" y1="62.333" y2="56.655"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#7CEC00"/>
                                    </linearGradient>
                                    <linearGradient id="J" x1="48.368" x2="49.701" y1="48.774" y2="46.87"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8000"/>
                                        <stop offset="1" stop-color="#FF9214"/>
                                    </linearGradient>
                                    <linearGradient id="K" x1="21.666" x2="22.301" y1="68.427" y2="65.697"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8000"/>
                                        <stop offset="1" stop-color="#FF9214"/>
                                    </linearGradient>
                                    <linearGradient id="L" x1="40" x2="40" y1="39.975" y2="47.737"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#216B00"/>
                                        <stop offset="1" stop-color="#216B00" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="N" x1="58.686" x2="59.376" y1="60.557" y2="58.247"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2F9300"/>
                                        <stop offset="1" stop-color="#57C300" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="O" x1="44.69" x2="59.33" y1="28.535" y2="28.535"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <linearGradient id="P" x1="54.462" x2="52.39" y1="30.686" y2="37.71"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <linearGradient id="R" x1="35.31" x2="20.671" y1="28.535" y2="28.535"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <linearGradient id="S" x1="25.539" x2="27.61" y1="30.686" y2="37.71"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#3C2200"/>
                                        <stop offset="1" stop-color="#512D00"/>
                                    </linearGradient>
                                    <radialGradient id="a" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(34.004 24.03) scale(36.7656)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE030"/>
                                        <stop offset="1" stop-color="#FFB92E"/>
                                    </radialGradient>
                                    <radialGradient id="b" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(34.004 24.03) scale(28.9251)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFEA5F"/>
                                        <stop offset="1" stop-color="#FFBC47" stop-opacity="0"/>
                                    </radialGradient>
                                    <radialGradient id="c" cx="0" cy="0" r="1"
                                                    gradientTransform="matrix(22.9079 0 0 8.28578 39.49 58.642)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF4C00"/>
                                        <stop offset=".568" stop-color="#FF4C00"/>
                                        <stop offset=".661" stop-color="#FF4C00"/>
                                        <stop offset=".752" stop-color="#FB4C0B" stop-opacity=".732"/>
                                        <stop offset=".909" stop-color="#EF4B27" stop-opacity=".268"/>
                                        <stop offset="1" stop-color="#E74A3A" stop-opacity="0"/>
                                    </radialGradient>
                                    <radialGradient id="d" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(40 51.392) scale(15.0558)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#7A4400"/>
                                        <stop offset="1" stop-color="#643800"/>
                                    </radialGradient>
                                    <radialGradient id="i" cx="0" cy="0" r="1"
                                                    gradientTransform="rotate(-106.146 37.484 -4.284) scale(7.20914 4.66419)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#7A4400"/>
                                        <stop offset="1" stop-color="#643800"/>
                                    </radialGradient>
                                    <radialGradient id="C" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(49.172 62.388) scale(2.45082)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="red"/>
                                        <stop offset="1" stop-color="#C20000"/>
                                    </radialGradient>
                                    <radialGradient id="D" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(38.204 40.404) scale(3.9784)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="red"/>
                                        <stop offset="1" stop-color="#C20000"/>
                                    </radialGradient>
                                    <radialGradient id="E" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(48.41 46.642) scale(2.35947)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE030"/>
                                        <stop offset="1" stop-color="#FFB92E"/>
                                    </radialGradient>
                                    <radialGradient id="F" cx="0" cy="0" r="1"
                                                    gradientTransform="translate(36.284 67.34) scale(2.59077)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE030"/>
                                        <stop offset="1" stop-color="#FFB92E"/>
                                    </radialGradient>
                                    <radialGradient id="M" cx="0" cy="0" r="1"
                                                    gradientTransform="rotate(1.538 -2078.45 1239.579) scale(2.35939)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE030"/>
                                        <stop offset="1" stop-color="#FFB92E"/>
                                    </radialGradient>
                                    <radialGradient id="Q" cx="0" cy="0" r="1"
                                                    gradientTransform="matrix(2.00477 -6.92478 4.48021 1.29705 27.922 30.577)"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".001" stop-color="#7A4400"/>
                                        <stop offset="1" stop-color="#643800"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <h1>310</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
