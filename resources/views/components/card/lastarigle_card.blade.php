
```blade
<div class="group w-full max-w-sm overflow-hidden rounded-3xl border-[3px] border-slate-950 bg-emerald-400 shadow-[5px_6px_0_#020617] transition-transform duration-200 hover:-translate-y-1">

    {{-- Cabeçalho --}}
    <div class="flex items-center justify-between gap-3 border-b-[3px] border-slate-950 px-5 py-4">
        <h2 class="text-xl font-black tracking-tight text-slate-950">
            ▤ Últimos artigos
        </h2>

        <span class="rounded-full border-2 border-slate-950 bg-emerald-200 px-3 py-1 text-xs font-black text-slate-950">
            RECENTES
        </span>
    </div>

    {{-- Conteúdo --}}
    <div class="m-3 rounded-2xl border-[3px] border-slate-950 bg-slate-100 p-5">

        <div class="mb-3 flex h-16 items-center justify-center rounded-xl border-2 border-slate-950 bg-sky-200 text-3xl">
            📰
        </div>

        <h3 class="text-sm font-black text-slate-800">
            Descubra as últimas publicações.
        </h3>

        <p class="mt-2 text-xs leading-relaxed text-slate-600">
            Títulos, resumos e links dos artigos tecnológicos coletados do Hackaday.
        </p>

        <a
            href="#noticias"
            class="mt-4 inline-flex rounded-xl border-2 border-slate-950 bg-white px-4 py-2 text-sm font-black text-slate-950 shadow-[3px_3px_0_#020617] transition hover:translate-y-0.5 hover:shadow-none"
        >
            Ver artigos ↗
        </a>

    </div>
</div>
```