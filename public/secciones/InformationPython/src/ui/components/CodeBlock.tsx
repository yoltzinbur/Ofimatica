// src/ui/components/CodeBlock.tsx
import { useState } from 'react';

interface CodeBlockProps {
  code: string;
  language?: string;
  title?: string;
}

export function CodeBlock({ code, language = 'python', title }: CodeBlockProps) {
  const [copied, setCopied] = useState(false);

  const handleCopy = async () => {
    try {
      await navigator.clipboard.writeText(code);
      setCopied(true);
      setTimeout(() => setCopied(false), 2000);
    } catch (err) {
      console.error('Error al copiar:', err);
    }
  };

  return (
    <div className="bg-gris-oscuro rounded-lg overflow-hidden shadow-lg my-4">
      {/* Header */}
      <div className="flex items-center justify-between px-4 py-2 bg-gris border-b border-gris-medio">
        <span className="text-sm text-gris-claro font-cascadia">
          {title || language}
        </span>
        <button
          onClick={handleCopy}
          className="px-3 py-1 text-sm bg-azul-fuerte hover:bg-azul text-white rounded transition-colors"
          aria-label="Copiar código"
        >
          {copied ? '✓ Copiado' : 'Copiar'}
        </button>
      </div>

      {/* Código */}
      <pre className="p-4 overflow-x-auto">
        <code className="text-amarillo font-cascadia text-sm leading-relaxed">
          {code}
        </code>
      </pre>
    </div>
  );
}