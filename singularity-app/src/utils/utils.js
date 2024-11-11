// Função para buscar o conteúdo do SVG
export async function getSvgContent(url) {
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error('Erro ao carregar o arquivo SVG');
    }
    return await response.text();  // Retorna o conteúdo SVG como texto
  } catch (error) {
    console.error('Erro ao buscar o SVG:', error);
    throw error;
  }
}
