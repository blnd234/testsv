@extends('components.layouts.app')

@section('welcome')

<style>
    .editor-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
        align-items: stretch;
        padding: 2rem;
    }

    .code-editor {
        background-color: #1e1e1e;
        color: #d4d4d4;
        font-family: 'Courier New', Courier, monospace;
        border-radius: 10px;
        padding: 1rem;
        overflow-x: auto;
        flex: 1 1 100%;
        max-width: 100%;
        position: relative;
        right: 0; /* Default for small screens */
    }

    .line-numbers {
        display: inline-block;
        width: 2rem;
        color: #888;
        user-select: none;
    }

    .code-line {
        display: inline-block;
        white-space: pre;
    }

    .keyword { color: #569CD6; }
    .function { color: #DCDCAA; }
    .variable { color: #9CDCFE; }
    .attribute { color: #C586C0; }
    .string { color: #CE9178; }
    .tag { color: #4EC9B0; }

    .preview-area {
        background-color: #2c2c2c;
        padding: 2rem;
        border-radius: 10px;
        flex: 1 1 100%;
        max-width: 100%;
        text-align: center;
    }

    .hero-name {
        font-size: 2rem;
        font-weight: bold;
        color: snow;
    }

    .hero-title {
        font-size: 1.2rem;
        color: #6c757d;
        margin-bottom: 1rem;
    }

    .hero-description {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 1.5rem;
    }

    .cta-button {
        padding: 0.75rem 1.5rem;
        background-color: #ff5722;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
    }

    .cta-button:hover {
        background-color: #e64a19;
    }

    .arrow-icon {
        margin-left: 0.5rem;
    }

    @media (min-width: 768px) {
        .code-editor, .preview-area {
            flex: 1 1 48%;
            max-width: 48%;
        }
    }

    /* Responsive right offset using breakpoints */
    @media (min-width: 992px) {
        .code-editor {
            right: 100px;
        }
    }

    @media (min-width: 1200px) {
        .code-editor {
            right: 200px;
        }
    }

    @media (min-width: 1400px) {
        .code-editor {
            right: 350px;
        }
    }
</style>


<div>
    <div class="editor-container">
        <!-- Code Editor -->
        <div class="code-editor">
            <div><span class="line-numbers">1</span><span class="code-line"><span class="keyword">const</span> <span class="function">HomePage</span> = () => {</span></div>
            <div><span class="line-numbers">2</span><span class="code-line">  <span class="keyword">const</span> [<span class="variable">isLoaded</span>, <span class="variable">setIsLoaded</span>] = <span class="function">useState</span>(<span class="keyword">true</span>);</span></div>
            <div><span class="line-numbers">3</span><span class="code-line">  <span class="keyword">const</span> <span class="variable">developerInfo</span> = {</span></div>
            <div><span class="line-numbers">4</span><span class="code-line">    <span class="attribute">name</span>: <span class="string">'Blnd Bakhtyar'</span>,</span></div>
            <div><span class="line-numbers">5</span><span class="code-line">    <span class="attribute">role</span>: <span class="string">'Web Developer'</span>,</span></div>
            <div><span class="line-numbers">6</span><span class="code-line">    <span class="attribute">bio</span>: <span class="string">'Building modern web experiences'</span></span></div>
            <div><span class="line-numbers">7</span><span class="code-line">  };</span></div>
            <div><span class="line-numbers">8</span><span class="code-line"></span></div>
            <div><span class="line-numbers">9</span><span class="code-line">  <span class="function">useEffect</span>(() => {</span></div>
            <div><span class="line-numbers">10</span><span class="code-line">    <span class="variable">document</span>.<span class="attribute">title</span> = `${<span class="variable">developerInfo</span>.<span class="attribute">name</span>} | Portfolio`;</span></div>
            <div><span class="line-numbers">11</span><span class="code-line">    <span class="function">setIsLoaded</span>(<span class="keyword">true</span>);</span></div>
            <div><span class="line-numbers">12</span><span class="code-line">  }, []);</span></div>
            <div><span class="line-numbers">13</span><span class="code-line"></span></div>
            <div><span class="line-numbers">14</span><span class="code-line">  <span class="keyword">return</span> (</span></div>
            <div><span class="line-numbers">15</span><span class="code-line">    <span class="tag">&lt;main</span> <span class="attribute">className</span>=<span class="string">"hero-container"</span><span class="tag">&gt;</span></span></div>
            <div><span class="line-numbers">16</span><span class="code-line">      <span class="tag">&lt;h1&gt;</span>{<span class="variable">developerInfo</span>.<span class="attribute">name</span>}<span class="tag">&lt;/h1&gt;</span></span></div>
            <div><span class="line-numbers">17</span><span class="code-line">      <span class="tag">&lt;p&gt;</span>{<span class="variable">developerInfo</span>.<span class="attribute">role</span>}<span class="tag">&lt;/p&gt;</span></span></div>
            <div><span class="line-numbers">18</span><span class="code-line">      <span class="tag">&lt;div</span> <span class="attribute">className</span>=<span class="string">"cta"</span><span class="tag">&gt;</span></span></div>
            <div><span class="line-numbers">19</span><span class="code-line">        <span class="tag">&lt;Link</span> <span class="attribute">href</span>=<span class="string">"/projects"</span><span class="tag">&gt;</span>View Projects<span class="tag">&lt;/Link&gt;</span></span></div>
            <div><span class="line-numbers">20</span><span class="code-line">      <span class="tag">&lt;/div&gt;</span></span></div>
            <div><span class="line-numbers">21</span><span class="code-line">    <span class="tag">&lt;/main&gt;</span></span></div>
            <div><span class="line-numbers">22</span><span class="code-line">  );</span></div>
            <div><span class="line-numbers">23</span><span class="code-line">};</span></div>
        </div>

        <!-- Preview Area -->
        <div class="preview-area">
            <div class="hero-section">
                <h1 class="hero-name">Blnd Baxtyar</h1>
                <p class="hero-title">Web Developer</p>
                <p class="hero-description">
                    I craft responsive, high-performance websites using the latest technologies — with clean code, scalable structure, and seamless user experiences.
                </p>
                <a href="./app" wire:navigate class="cta-button">
                    The things I know
                    <span class="arrow-icon">→</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
