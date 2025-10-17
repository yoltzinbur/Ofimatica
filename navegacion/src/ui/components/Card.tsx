import type { Card } from "../types/types";
import informatica from "../../img/informatica.png";

export default function Card({seccion, index, activeSlide, slideStyles, next, prev}: Card) {
  return (
    <div className={`text-white relative ${slideStyles(index)} 
    ${(index === 0 && activeSlide === 0) ? 'col-start-2' : 'col-start-auto' }`}>
        <figure className='aspect-[4/5] h-[460px] mask-b-from-50% mask-b-to-90%'>
           <img src={informatica} alt={`Imagen de la sección ${seccion.title}`} className='size-full object-cover' />
        </figure>
        <div className={`absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/3
        w-3xl px-5 text-center flex flex-col justify-center items-center gap-2
        ${index === activeSlide ? '' : 'hidden'}`}>
            <h2 className='text-5xl font-black tracking-widest uppercase'>
                {seccion.title}
            </h2>
            <p className='text-lg text-wrap'>
                {seccion.content}
            </p>
            <div className='flex gap-12'>
                <button className='bg-zinc-900 hover:bg-stone-800 transition-all duration-300 px-5 rounded-lg
                cursor-pointer shadow-lg/50 font-bold'
                onClick={prev}>
                    &lt;
                </button>
                <a className='shadow-lg/50 w-fit px-12 py-3 bg-zinc-900 font-mono tracking-widest uppercase
                cursor-pointer underline-offset-6
                hover:bg-stone-800 transition-all duration-300'
                href={seccion.path}>
                    Ver Sección
                </a>
                <button className='bg-zinc-900 hover:bg-stone-800 transition-all duration-300 px-5 rounded-lg
                cursor-pointer shadow-lg/50 font-bold'
                onClick={next}>
                    &gt;
                </button>
            </div>
        </div>
    </div>
  )
}
