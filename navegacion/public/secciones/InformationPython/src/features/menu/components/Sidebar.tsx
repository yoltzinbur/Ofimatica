// src/features/menu/components/Sidebar.tsx
import { useState } from 'react';
import { MENU_DATA } from '../data/menuData';

interface SidebarProps {
  isOpen: boolean;
  onClose: () => void;
  onNavigate: (lessonId: string) => void;
  activeLesson: string | null;
}

export function Sidebar({ isOpen, onClose, onNavigate, activeLesson }: SidebarProps) {
  const [expandedSections, setExpandedSections] = useState<string[]>(['intro']);

  const toggleSection = (sectionId: string) => {
    setExpandedSections(prev =>
      prev.includes(sectionId)
        ? prev.filter(id => id !== sectionId)
        : [...prev, sectionId]
    );
  };

  return (
    <>
      {isOpen && (
        <div
          className="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
          onClick={onClose}
        />
      )}

      <aside
        className={`
          fixed h-full left-0 w-64 bg-azul-fuerte z-50
          transform transition-transform duration-300 ease-in-out
          ${isOpen ? 'translate-x-0' : '-translate-x-full'}
          overflow-y-auto
        `}
      >
        <div className="flex items-center justify-between p-4 border-b-4 border-amarillo">
          <h2 className="text-2xl font-bold text-amber-300">Curso Python</h2>
          <button
            onClick={onClose}
            className="p-2 hover:bg-indigo-700 rounded-md transition-all cursor-pointer duration-300"
            aria-label="Cerrar menú"
          >
            <svg className="size-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <nav className="mt-4">
          <ul>
            {MENU_DATA.map(section => (
              <li key={section.id}>
                <button
                  onClick={() => toggleSection(section.id)}
                  className="flex items-center w-full p-4 hover:bg-indigo-600 text-gray-300 hover:text-amarillo transition-all duration-300
                  cursor-pointer"
                >
                  <span className="text-amarillo">{section.icon}</span>
                  <span className="ml-3 flex-1 text-left text-xl font-bold tracking-wide">{section.title}</span>
                  <svg
                    className={`size-4 transform transition-transform ${
                      expandedSections.includes(section.id) ? 'rotate-180' : ''
                    }`}
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                  </svg>
                </button>

                <ul
                  className={`
                    pl-8 bg-gris-medio overflow-hidden transition-all duration-600
                    ${expandedSections.includes(section.id) ? 'max-h-[2000px]' : 'max-h-0'}
                  `}
                >
                  {section.items.map(item => (
                    <li key={item.id}>
                      <button
                        onClick={() => {
                          onNavigate(item.id);
                          if (window.innerWidth < 1024) onClose();
                        }}
                        className={`
                          block w-full text-left p-3 transition-colors cursor-pointer
                          ${
                            activeLesson === item.id
                              ? 'bg-azul-fuerte/80 text-amarillo font-semibold'
                              : 'text-slate-100 hover:bg-gris-mamalon hover:font-medium transition-all duration-300'
                          }
                        `}
                      >
                        {item.label}
                      </button>
                    </li>
                  ))}
                </ul>
              </li>
            ))}
          </ul>
        </nav>
      </aside>
    </>
  );
}