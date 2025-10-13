import type { MenuSection } from '../types/menu.types';

export const MENU_DATA: MenuSection[] = [
  {
    id: 'intro',
    title: 'Introducción',
    icon: (
      <svg className="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
    ),
    items: [
      { id: '1.1', label: '¿Cómo funciona un programa de computadora?', path: '1.1' },
      { id: '1.2', label: 'Lenguajes naturales vs. lenguajes de programación', path: '1.2' },
      { id: '1.3', label: '¿Qué compone a un lenguaje?', path: '1.3' },
      { id: '1.4', label: 'Lenguaje máquina vs. lenguaje de alto nivel', path: '1.4' },
      { id: '1.5', label: 'Compilación vs. Interpretación', path: '1.5' },
      { id: '1.6', label: 'Introducción a Python', path: '1.6' },
      { id: '1.7', label: '¿Qué hace que Python sea tan especial?', path: '1.7' },
      { id: '1.8', label: 'Existe más de un Python', path: '1.8' },
      { id: '1.9', label: 'Implementaciones de Python', path: '1.9' },
      { id: '1.10', label: 'Descarga e instalación de Python', path: '1.10' },
      { id: '1.11', label: 'Configuración de Python', path: '1.11' },
      { id: '1.12', label: 'Comenzando tu trabajo con Python', path: '1.12' },
      { id: '1.13', label: 'Tu primer programa antes de tu primer programa', path: '1.13' },
      { id: '1.14', label: 'Cómo estropear y arreglar tu código', path: '1.14' },
    ],
  },
  {
    id: 'basicos',
    title: 'Python Básico',
    icon: (
      <svg className="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    ),
    items: [
      { id: '2.1', label: 'Nuestro Primer Programa', path: '2.1' },
      { id: '2.2', label: 'Literales de Python', path: '2.2' },
      { id: '2.3', label: 'Operadores Básicos', path: '2.3' },
      { id: '2.4', label: 'Variables', path: '2.4' },
      { id: '2.5', label: 'Comentarios', path: '2.5' },
      { id: '2.6', label: 'Interacción con el Usuario', path: '2.6' },
    ],
  },
];