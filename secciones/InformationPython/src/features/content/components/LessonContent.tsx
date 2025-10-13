import { LESSONS_DATA } from '../data/lessonsData';

interface LessonContentProps {
  lessonId: string | null;
}

export function LessonContent({ lessonId }: LessonContentProps) {
  if (!lessonId) {
    return (
      <div className="flex flex-col items-center justify-center min-h-[60vh] text-center px-4">
        <div className="relative w-full max-w-2xl h-64 mb-8 rounded-lg overflow-hidden">
        </div>
        <h1 className="text-4xl font-bold mb-4 text-indigo-800">Bienvenido a la Sección Informativa de Python</h1>
        <p className="text-xl text-indigo-600 max-w-2xl">
          ¡¡Selecciona una sección del menú lateral para comenzar!!.
        </p>
      </div>
    );
  }

  const lesson = LESSONS_DATA[lessonId];

  if (!lesson) {
    return (
      <div className="text-center py-12">
        <p className="text-xl text-gris-claro">
          Esta lección aún no está disponible. ¡Vuelve pronto!
        </p>
      </div>
    );
  }

  return (
    <div className="space-y-8">
      <section className="bg-gris p-6 rounded-lg shadow-xl">
        <h1 className="text-3xl font-bold text-gray-100">{lesson.title}</h1>
      </section>

      {lesson.sections.map(section => (
        <section key={section.id} className="bg-gris p-6 rounded-lg shadow-xl">
          <h2 className="text-2xl font-semibold mb-4 text-azul-claro">{section.title}</h2>
          <div className="prose prose-invert max-w-none">{section.content}</div>
        </section>
      ))}
    </div>
  );
}