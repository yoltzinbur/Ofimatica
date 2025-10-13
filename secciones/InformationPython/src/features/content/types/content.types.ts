export interface ContentSection {
  id: string;
  title: string;
  content: React.ReactNode;
}

export interface Lesson {
  id: string;
  title: string;
  sections: ContentSection[];
}

export type LessonData = Record<string, Lesson>;