export interface Seccion {
    id: string,
    title: string,
    content: string,
    path: string
}

export interface Card {
    seccion: Seccion,
    index: number,
    activeSlide: number,
    slideStyles: (index: number) => string | undefined,
    next: () => void,
    prev: () => void
}
