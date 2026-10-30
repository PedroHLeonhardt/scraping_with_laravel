<input type="checkbox" id="nav-toggle" class="peer sr-only" />
<header class="w-full border-b-[3px] border-black bg-yellow-300 sticky top-0 z-40 border-b-[3px] border-slate-950 bg-yellow-300">
    <div class="mx-auto flex w-full max-w-6xl items-center px-5 py-3 sm:px-8 mx-auto flex min-h-20 max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6">
        <a href="/" class="flex items-center gap-3">
            <span class="flex size-11 items-center justify-center rounded-xl border-[3px] border-slate-950 bg-white text-2xl shadow-[3px_3px_0_#020617]">
                ⚡
            </span>
            <span class="text-lg font-black tracking-tight text-slate-950 sm:text-xl">
                HACK<span class="text-violet-700">LAB</span>
                <span class="block text-[10px] font-bold uppercase tracking-[0.2em]">
                    Tech discoveries
                </span>
            </span>
        </a>
        <nav aria-label="Navegação principal" class="hidden md:block">
            <ul class="flex items-center gap-3 text-sm font-black text-slate-950">
                <li>
                    <a href="#work"
                       class="rounded-xl border-2 border-transparent px-4 py-2 transition hover:border-slate-950 hover:bg-white hover:shadow-[3px_3px_0_#020617]">
                        ARTIGOS
                    </a>
                </li>
                <li>
                    <a href="#categories"
                       class="rounded-xl border-2 border-transparent px-4 py-2 transition hover:border-slate-950 hover:bg-white hover:shadow-[3px_3px_0_#020617]">
                        CATEGORIAS
                    </a>
                </li>
                <li>
                    <a href="#about"
                       class="rounded-xl border-2 border-transparent px-4 py-2 transition hover:border-slate-950 hover:bg-white hover:shadow-[3px_3px_0_#020617]">
                        SOBRE
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex items-center gap-3">
            <a href="#api"
               class="hidden rounded-xl border-[3px] border-slate-950 bg-violet-500 px-4 py-2.5 text-sm font-black text-white shadow-[4px_4px_0_#020617] transition hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0_#020617] sm:inline-flex">
                EXPLORAR API ↗
            </a>
            <label for="nav-toggle"
                   class="cursor-pointer rounded-xl border-[3px] border-slate-950 bg-white p-2.5 text-slate-950 shadow-[3px_3px_0_#020617] transition hover:bg-emerald-300 peer-focus-visible:ring-2 peer-focus-visible:ring-violet-700 md:hidden">

                <span class="sr-only">Abrir ou fechar menu</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="size-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2.5"
                     aria-hidden="true">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </label>
        </div>
    </div>
    <nav id="mobile-nav"
         aria-label="Navegação mobile"
         class="hidden border-t-[3px] border-slate-950 bg-yellow-200 peer-checked:block md:hidden">
        <ul class="space-y-3 px-5 py-5 text-sm font-black text-slate-950">
            <li>
                <a href="#work"
                   class="block rounded-xl border-[3px] border-slate-950 bg-white px-4 py-3 shadow-[3px_3px_0_#020617]">
                    📰 ARTIGOS
                </a>
            </li>
            <li>
                <a href="#categories"
                   class="block rounded-xl border-[3px] border-slate-950 bg-emerald-300 px-4 py-3 shadow-[3px_3px_0_#020617]">
                    🧩 CATEGORIAS
                </a>
            </li>
            <li>
                <a href="#about"
                   class="block rounded-xl border-[3px] border-slate-950 bg-sky-300 px-4 py-3 shadow-[3px_3px_0_#020617]">
                    💡 SOBRE
                </a>
            </li>
            <li>
                <a href="#api"
                   class="block rounded-xl border-[3px] border-slate-950 bg-violet-500 px-4 py-3 text-white shadow-[3px_3px_0_#020617]">
                    ⚡ EXPLORAR API
                </a>
            </li>
        </ul>
    </nav>
</header>
