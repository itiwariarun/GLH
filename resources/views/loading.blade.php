<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div x-data="{ loading: false }" x-show="loading" @loading.window="loading = $event.detail.loading">

        <style>
            .loader {
                border-top-color: #eaecee;
                border-bottom-color: #255d83;
                border-right-color: #ce1919;
                border-left-color: #066913;
                -webkit-animation: spinner 3s linear infinite;
                animation: spinner 3s linear infinite;
            }

            @-webkit-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spinner {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
        <div
            class="fixed top-0 bottom-0 left-0 right-0 z-50 flex flex-col items-center justify-center w-full h-screen overflow-hidden bg-white dark:bg-gray-700">
            <div class="w-20 h-20 mb-4 ease-linear border-4 border-t-4 border-gray-200 rounded-full loader"></div>
            <h2 class="text-2xl font-semibold text-center text-cyan-800 dark:text-cyan-200">Loading....</h2>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        this.livewire.hook('message.sent', () => {
            window.dispatchEvent(
                new CustomEvent('loading', { detail: { loading: true }})
            );
        } )
        this.livewire.hook('message.processed', (message, component) => {
            window.dispatchEvent(
                new CustomEvent('loading', { detail: { loading: false }})
            );
        })
    });
    </script>
</div>