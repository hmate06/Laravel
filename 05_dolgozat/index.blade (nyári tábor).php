
    {{-- Űrlap --}}
    <section class="mx-auto mb-10 max-w-2xl rounded-lg bg-white p-6 shadow">
        <h1 class="mb-6 text-2xl font-bold text-gray-800">Nyári tábor jelentkezés</h1>


        <form action="{{ route('camp-applications.store') }}" method="POST" novalidate class="space-y-5">
            @csrf

            {{-- Gyermek neve --}}
            <div>
                <label for="child_name" class="mb-1 block font-medium text-gray-700">Gyermek neve</label>
                <input type="text" id="child_name" name="child_name" value="" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500">
                
                    <p class="mt-1 text-sm text-red-600"></p>

            </div>

            {{-- Szülő e-mail címe --}}
            <div>
                <label for="parent_email" class="mb-1 block font-medium text-gray-700">Szülő e-mail címe</label>
                <input type="email" id="parent_email" name="parent_email" value="" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500">
                
                    <p class="mt-1 text-sm text-red-600"></p>
                
            </div>

            {{-- Életkor --}}
            <div>
                <label for="age" class="mb-1 block font-medium text-gray-700">Életkor (év)</label>
                <input type="number" id="age" name="age" value="" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500">
                
                    <p class="mt-1 text-sm text-red-600"></p>
                
            </div>

            {{-- Turnus --}}
            <div>
                <label for="camp_session" class="mb-1 block font-medium text-gray-700">Turnus</label>
                <select id="camp_session" name="camp_session" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500">
                    <option value="">-- Válassz turnust --</option>
                    
                </select>
                
                    <p class="mt-1 text-sm text-red-600"></p>
                
            </div>

            {{-- Ellátás --}}
            <div>
                <label for="accommodation" class="mb-1 block font-medium text-gray-700">Ellátás</label>
                <select id="accommodation" name="accommodation" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500">
                    <option value="">-- Válassz ellátást --</option>
                    
                </select>
                
                    <p class="mt-1 text-sm text-red-600"></p>
                
            </div>

            {{-- Megjegyzés --}}
            <div>
                <label for="notes" class="mb-1 block font-medium text-gray-700">
                    Megjegyzés (allergia, egyéb) <span class="text-sm font-normal text-gray-500">– nem kötelező</span>
                </label>
                <textarea id="notes" name="notes" rows="4" class="w-full rounded border px-3 py-2 focus:outline-none focus:ring-1 border-gray-300 focus:ring-blue-500"></textarea>
                
                    <p class="mt-1 text-sm text-red-600"></p>
                
            </div>

            <button type="submit"
                class="rounded bg-blue-600 px-5 py-2 font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Jelentkezés elküldése
            </button>
        </form>
    </section>

    {{-- Kártyák --}}
    <section>
        <h2 class="mb-4 text-xl font-bold text-gray-800">Beérkezett jelentkezések</h2>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            
			
			
                <article class="rounded-lg border border-gray-200 bg-white p-5 shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-800"></h3>
                    <p class="mb-3 text-sm text-gray-500"> éves</p>

                    <dl class="space-y-1 text-sm text-gray-700">
                        <div><dt class="inline font-medium">Szülő e-mail:</dt> <dd class="inline"> </dd></div>
                        <div><dt class="inline font-medium">Turnus:</dt> <dd class="inline"> </dd></div>
                        <div><dt class="inline font-medium">Ellátás:</dt> <dd class="inline"> </dd></div>
                        
                            <div><dt class="inline font-medium">Megjegyzés:</dt> <dd class="inline"> </dd></div>
                        
                    </dl>

                    <p class="mt-4 text-xs text-gray-400">Jelentkezés: </p>
                </article>
            
			
                <p class="text-gray-500">Még nem érkezett jelentkezés.</p>
            
			
        </div>
    </section>

