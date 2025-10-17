import React, { useState, type ReactNode } from 'react'
import { SECCIONES } from '../../ui/data/data';
import Card from '../../ui/components/Card';

export default function NavSection() {
  const [activeSlide, setActiveSlide] = useState(0);

  const next = () => {
    if (activeSlide < SECCIONES.length - 1) setActiveSlide(activeSlide + 1);
  }

  const prev = () => {
    if (activeSlide > 0) setActiveSlide(activeSlide - 1);
  }

  const slideStyles = (index: number) => {
    if (activeSlide - 1 === index) return ('opacity-50 h-[400px] blur-xs');
    if (activeSlide + 1 === index) return ('opacity-50 h-[400px] blur-xs');
    if (index < activeSlide - 1) return ('hidden');
    if (index > activeSlide + 1) return ('hidden');
  }

  return (
    <div className="min-h-screen w-full bg-[#020617] relative">
      {/* Fondo mamalón */}
      <div className="absolute inset-0" style={{backgroundImage: `radial-gradient(circle 500px at 50% 200px, #3e3e3e, transparent)`,}}/>
      {/* Contenido - Contenedor del carrusel */}
      <div className='min-h-dvh w-dvw place-items-center grid grid-cols-3 px-16'>
        {SECCIONES.map((seccion, index): ReactNode => {
          return (
            <React.Fragment key={seccion.id}> 
              <Card 
                seccion={seccion}
                index={index}
                activeSlide={activeSlide}
                slideStyles={slideStyles}
                next={next}
                prev={prev}
              />
            </React.Fragment>
          );
        })}
      </div>
    </div>
  )
}
