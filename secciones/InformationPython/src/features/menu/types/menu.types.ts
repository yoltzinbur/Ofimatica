export interface MenuItem {
  id: string;
  label: string;
  path: string;
  icon?: React.ReactNode;
}

export interface MenuSection {
  id: string;
  title: string;
  icon: React.ReactNode;
  items: MenuItem[];
}

export interface MenuState {
  isOpen: boolean;
  expandedSections: string[];
  activeItem: string | null;
}