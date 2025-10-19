/* eslint-disable react-hooks/exhaustive-deps */
import { useCallback, useEffect, useRef } from 'react'

export default function StormBackground() {
    const lightningRef = useRef<HTMLDivElement>(null);
    const rainRef = useRef<HTMLDivElement>(null);
    const glassRef = useRef<HTMLDivElement>(null);
    const intervals = useRef<number[]>([]);
    const timeouts = useRef<number[]>([]);

    const createLightning = useCallback(() => {
        if (!lightningRef.current) return;

        const flash = document.createElement('div');
        flash.className = 'absolute top-0 left-0 size-full bg-white opacity-0 transition-opacity duration-300';
        flash.style.background = 'rgba(255,255,255,0.75)';
        flash.style.animationName = 'flash';
        flash.style.animationDuration = '0.3s';
        flash.style.animationTimingFunction = 'ease-out';

        lightningRef.current.appendChild(flash);

        const timeout = setTimeout(() => {
            flash.remove();
        }, 300);

        timeouts.current.push(timeout as unknown as number);
    }, []);

    const lightningLoop = useCallback(() => {
        const delay = 1000 + Math.random() * 2500;
        const timeout = setTimeout(() => {
            if (Math.random() < 0.5) createLightning();
            lightningLoop();
        }, delay);
        // timeouts.current.push(timeout);
        timeouts.current.push(timeout as unknown as number);
    }, [createLightning]);

    const createRainDrop = useCallback(() => {
        if (!rainRef.current) return;
        const drop = document.createElement('div');
        drop.className = 'rain-drop absolute w-[1px] bg-[rgba(255,255,255,0.2)] blur-[1px]';
        drop.style.left = Math.random() * 100 + 'vw';
        drop.style.height = (10 + Math.random() * 25) + 'vh';
        drop.style.animationDuration = (0.8 + Math.random() * 1.2) + 's';
        drop.style.animationName = 'fall';
        drop.style.animationTimingFunction = 'linear';
        drop.style.animationIterationCount = 'infinite';

        rainRef.current.appendChild(drop);
        const timeout = setTimeout(() => drop.remove(), 2000);
        timeouts.current.push(timeout);
    }, []);

    const createGlassDrop = useCallback(() => {
        if (!glassRef.current) return;
        const g = document.createElement('div');
        g.className = 'glass-drop absolute rounded-full bg-[rgba(255,255,255,0.15)] filter blur-[0.6px] shadow-[inset_-1px_-1px_2px_rgba(255,255,255,0.3)]';
        g.style.left = Math.random() * 100 + 'vw';
        g.style.top = Math.random() * 20 + 'vh';
        const size = (4 + Math.random() * 8) + 'px';
        g.style.width = size;
        g.style.height = size;
        g.style.animationDuration = (3 + Math.random() * 5) + 's';
        g.style.animationName = 'drip';
        g.style.animationTimingFunction = 'linear';
        g.style.animationFillMode = 'forwards';
    
        glassRef.current.appendChild(g);
        const timeout = setTimeout(() => g.remove(), 9000);
        timeouts.current.push(timeout);
    }, []);

    useEffect(() => {
        lightningLoop();
        intervals.current.push(setInterval(createRainDrop, 50));
        intervals.current.push(setInterval(createRainDrop, 700));
        intervals.current.push(setInterval(createGlassDrop, 300));

        return () => {
            intervals.current.forEach(clearInterval);
            timeouts.current.forEach(clearTimeout);
            if (lightningRef.current) lightningRef.current.innerHTML = '';
            if (rainRef.current) rainRef.current.innerHTML = '';
            if (glassRef.current) glassRef.current.innerHTML = '';
        };
    }, [lightningLoop, createRainDrop, createGlassDrop]);

    return (
        <>
            <div id="lightning-conteiner" ref={lightningRef} className='fixed inset-0 pointer-events-none z-[5]' />
            <div id='rain-conteiner' ref={rainRef} className='fixed inset-0 pointer-events-none z-[8]' />
            <div id='glass-conteiner' ref={glassRef} className='fixed inset-0 pointer-events-none z-[8]' />
        </>
    )
}
