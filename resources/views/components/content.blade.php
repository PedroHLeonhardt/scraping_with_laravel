```blade
<section id="work" class="bg-[#080B10] px-5 py-20 sm:px-8">

    <div class="mx-auto max-w-6xl">

        {{-- Cabeçalho --}}
        <header class="mb-12 max-w-2xl">
            <span class="inline-flex items-center gap-2 rounded-full border-[3px] border-black bg-cyan-400 px-4 py-2 text-xs font-black uppercase tracking-wider text-black shadow-[3px_3px_0_#000]">
                <span class="size-2 rounded-full bg-violet-600"></span>
                Descobertas selecionadas
            </span>

            <h2 class="mt-6 text-3xl font-black leading-tight text-white sm:text-4xl md:text-5xl">
                Três ideias.
                <span class="text-cyan-400">Um mundo</span>
                de possibilidades.
            </h2>

            <p class="mt-4 max-w-xl text-base leading-relaxed text-slate-300">
                Tecnologia, engenharia e projetos criativos que merecem
                um lugar no seu radar.
            </p>
        </header>


        {{-- Artigo 1 --}}
        <article class="grid overflow-hidden rounded-3xl border-[3px] border-black bg-yellow-300 shadow-[7px_7px_0_#000] transition duration-200 hover:-translate-y-1 hover:shadow-[9px_9px_0_#000] md:grid-cols-2">

            {{-- Imagem --}}
            <a href="https://hackaday.com/"
               target="_blank"
               rel="noopener noreferrer"
               class="group relative min-h-64 overflow-hidden border-b-[3px] border-black md:border-b-0 md:border-r-[3px]">

                <img
                    src="https://images.unsplash.com/photo-1518770660439-4636190af475"
                    alt="Placa eletrônica e componentes de hardware"
                    class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                >

                <span class="absolute left-5 top-5 rounded-xl border-[3px] border-black bg-cyan-400 px-3 py-2 text-xs font-black text-black shadow-[3px_3px_0_#000]">
                    01 / HARDWARE
                </span>
            </a>

            {{-- Conteúdo --}}
            <div class="flex flex-col justify-center p-6 sm:p-9">

                <span class="text-xs font-black uppercase tracking-widest text-violet-800">
                    Engenharia · Tecnologia · Hackaday
                </span>

                <h3 class="mt-4 text-2xl font-black leading-tight text-black sm:text-3xl">
                    Projetos que transformam ideias em tecnologia.
                </h3>

                <p class="mt-4 leading-relaxed text-slate-900">
                    Explore invenções, experimentos e soluções criativas
                    que movimentam a comunidade tecnológica.
                </p>

                <div class="mt-7">
                    <a
                        href="https://hackaday.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 rounded-xl border-[3px] border-black bg-violet-500 px-5 py-3 font-black text-white shadow-[4px_4px_0_#000] transition hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0_#000]"
                    >
                        Explorar publicação <span>↗</span>
                    </a>
                </div>

            </div>

        </article>


        {{-- Artigo 2 --}}
        <article class="mt-12 grid overflow-hidden rounded-3xl border-[3px] border-black bg-cyan-300 shadow-[7px_7px_0_#000] transition duration-200 hover:-translate-y-1 hover:shadow-[9px_9px_0_#000] md:grid-cols-2">

            {{-- Conteúdo --}}
            <div class="order-2 flex flex-col justify-center p-6 sm:p-9 md:order-1">

                <span class="text-xs font-black uppercase tracking-widest text-violet-800">
                    Eletrônica · DIY · Inovação
                </span>

                <h3 class="mt-4 text-2xl font-black leading-tight text-black sm:text-3xl">
                    Conhecimento técnico para quem gosta de construir.
                </h3>

                <p class="mt-4 leading-relaxed text-slate-900">
                    Circuitos, programação, dispositivos e experiências
                    desenvolvidas por pessoas apaixonadas por tecnologia.
                </p>

                <div class="mt-7">
                    <a
                        href="https://hackaday.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 rounded-xl border-[3px] border-black bg-emerald-400 px-5 py-3 font-black text-black shadow-[4px_4px_0_#000] transition hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[2px_2px_0_#000]"
                    >
                        Ver conteúdos <span>↗</span>
                    </a>
                </div>

            </div>

            {{-- Imagem --}}
            <a href="https://hackaday.com/"
               target="_blank"
               rel="noopener noreferrer"
               class="group relative order-1 min-h-64 overflow-hidden border-b-[3px] border-black md:order-2 md:border-b-0 md:border-l-[3px]">

                <img
                    src="https://images.unsplash.com/photo-1519389950473-47ba0277781c"
                    alt="Ambiente de trabalho com computadores e tecnologia"
                    class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                >

                <span class="absolute right-5 top-5 rounded-xl border-[3px] border-black bg-yellow-300 px-3 py-2 text-xs font-black text-black shadow-[3px_3px_0_#000]">
                    02 / INOVAÇÃO
                </span>
            </a>

        </article>


        {{-- Rodapé da seção --}}
        <div class="mt-10 flex flex-wrap items-center justify-between gap-4 border-t-[3px] border-slate-800 pt-6">

            <p class="text-sm font-bold text-slate-400">
                TECNOLOGIA · CRIATIVIDADE · DESCOBERTAS
            </p>

            <a
                href="https://hackaday.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="font-black text-cyan-400 transition hover:text-violet-400"
            >
                Continue explorando ↗
            </a>

        </div>

    </div>

</section>
```