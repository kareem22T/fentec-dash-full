<x-filament-widgets::widget>
    <x-filament::section>
        <form target="_blank" action="http://api.uqbike.com/terControl/sendControl.do?token=E4A663AD4406DA768300D4EA20BCC4CF&paramName=22&controlType=control" method="POST">
            <h1 style="font-weight: bold; text-align: center">Unlock Hemlet</h1>
            <div class="flex items-center gap-x-3 justify-between ">
                <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.name">
                    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">

                        Serial Number
                    </span>
                </label>
            </div>
            <br>
            <div
                class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                <input type="text" name="machineNO" id="machineNO"
                    class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3">
            </div>
            <br>
            <div class="fi-ac gap-3 flex flex-wrap items-center justify-start">
                <button type="submit" style="background: #ff7400"
                class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">Submit</button>
            </div>
        </form>
    </x-filament::section>
</x-filament-widgets::widget>
