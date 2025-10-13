import { useState } from 'react';
import { Sidebar } from '../features/menu/components/Sidebar';
import { LessonContent } from '../features/content/components/LessonContent';

function App() {
    const [isSidebarOpen, setIsSidebarOpen] = useState(false);
    const [activeLesson, setActiveLesson] = useState<string | null>(null);

    const handleNavigate = (lessonId: string) => {
        setActiveLesson(lessonId);
    };

    return (
    <div className="min-h-screen  text-gray-200">
        <div>
            <button
                onClick={() => setIsSidebarOpen(true)}
                className={`
                    fixed top-4 left-4 z-30 p-2 bg-azul-fuerte rounded-md
                    hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-azul
                    transition-all duration-300 cursor-pointer
                    ${isSidebarOpen ? 'opacity-0 pointer-events-none' : 'opacity-100'}
                `}
                aria-label="Abrir menú"
            >
                <svg className="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>   
            <Sidebar
                isOpen={isSidebarOpen}
                onClose={() => setIsSidebarOpen(false)}
                onNavigate={handleNavigate}
                activeLesson={activeLesson}
            />  
            <main
                className={`
                    p-8 min-h-screen bg-gris-claro transition-all duration-300
                    ${isSidebarOpen ? 'lg:ml-64' : 'ml-0'}
                `}
            >
                <div className="max-w-7xl mx-auto">
                    <LessonContent lessonId={activeLesson} />
                </div>
            </main>
        </div>
    </div>
  );
}

export default App;