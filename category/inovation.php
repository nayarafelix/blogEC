<?php include "../components/header.php" ?>

<?php include "../components/banner.php" ?>

<div class="category-description">
    Tecnologias disruptivas e outras inovações como Blockchain, Big Data, Inteligencia Artificial, etc.
</div>

<div class="filter">
    <select class="select filter-select" id="filter">
        <option selected>Ordenar por ...</option>
        <option value="1">Mais recente</option>
        <option value="2">Mais antigo</option>
        <option value="3">Mais vistos</option>
    </select>
</div>

<?php include "../components/destaque.php"?>

<div class="container">
    <div class="postagens">
        <div class="card bg-dark text-white post destaque">
            <img src="/blog/media/image/destaque.jpg" class="card-img">
            <span class="tag post-tag">
                    Solutions
                </span>
            <div class="card-img-overlay">
                <div class="card-title post-title">
                    <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                    <div class="post-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                        <span class="date">04-05</span>
                    </div>
                </div>
                <div class="card-text post-description">
                    <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                </div>
            </div>
        </div>
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="card bg-dark text-white post">
                <img src="/blog/media/image/destaque.jpg" class="card-img">
                <span class="tag post-tag">
                    Solutions
                </span>
                <div class="card-img-overlay">
                    <div class="card-title post-title">
                        <h3>"Como fazer o seu blog aumentar a sua visibilidade na internet."</h3>
                        <div class="post-info">
                            <span class="author">
                                <h5>Por Talissa Andrade</h5>
                            </span> |
                            <span class="date">04-05</span>
                        </div>
                    </div>
                    <div class="card-text post-description">
                        <p>Vivemos na era da internet onde somos atacados por anúncios de lojas de roupas, alimentos, servicos e eventos além de sites onde há sites que disponibilizam conteúdo...</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php include "../components/footer.php"?>