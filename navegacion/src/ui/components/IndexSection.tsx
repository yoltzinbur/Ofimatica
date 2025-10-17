import StormBackground from "./StormBackground";
import { Link } from "react-router-dom";

export default function IndexSection() {
  return (
    <section className='relative h-screen flex justify-center items-center text-center overflow-hidden
    bg-gradient-to-br from-hero-start to-hero-end'>
        <StormBackground />
        <div className="absolute inset-0 bg-[rgba(0,0,0,0.5)] z-hero-overlay"></div>
        <div className="relative z-hero-content max-w-xl md:max-w-3xl lg:max-w-4xl px-4 text-index-text
        shadow-none text-shadow-[0_0_6px_rgba(0,0,0,0.6)]">
            <h1 className="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-4 lg:mb-6">
                Guía de Informática Básica
            </h1>
            <p className="text-lg sm:text-xl lg:text-2xl text-index-text text-shadow-[0_0_8px_rgba(0,0,0,0.6)]">
                Explora paso a paso la historia, evolución y conceptos esenciales de la informática. 
                Cada tema cuenta con información relevante y fácil de comprender.
            </p>
            <Link to="/nav/NavSection"
            className="inline-block mt-8 px-10 py-4 bg-gradient-to-r from-btn-start to-btn-end rounded-[40px]
            ">
                Comenzar
            </Link>
        </div>
    </section>
  )
}
