<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>Pokédex</title>
</head>
<body>
<?php
// Appel du bloc Header et du Menu
require 'header.php';
?>
    <div id="pokedex">
        <div id="top">
            <div id="top-bar">
                <input
                    type="text"
                    id="search"
                    value="Bulbasaur" 
                />
                <span id="number">#001</span>
            </div>
            <div id="poke-image-placeholder">
                <img src="1.png" id="pokemon-image" alt="pokemon-image" />
            </div>
        </div>
        <div id="data">
            <div id="types">
                <span
                    style="background-color: rgb(116, 203, 72);"
                    class="type"
                >
                    Grass
                </span>
                <span
                    style="background-color: rgb(164,  62, 158);"
                    class="type"
                >
                    Poison
                </span>
            </div>

            <h4 id="base-stats" style="color: rgb(116, 203, 72);">Base Stats</h4>

            <div id="stats">
                <div class="stat-row">
                    <div class="stat-desc">HP</div>
                    <div class="stat-number">045</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
                <div class="stat-row">
                    <div class="stat-desc">ATK</div>
                    <div class="stat-number">049</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 49%"></div>
                        </div>
                    </div>
                </div>
                <div class="stat-row">
                    <div class="stat-desc">DEF</div>
                    <div class="stat-number">049</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 49%"></div>
                        </div>
                    </div>
                </div>
                <div class="stat-row">
                    <div class="stat-desc">SATK</div>
                    <div class="stat-number">065</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
                <div class="stat-row">
                    <div class="stat-desc">SDEF</div>
                    <div class="stat-number">065</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 65%"></div>
                        </div>
                    </div>
                    
                    <div id="abilities-container">
                        <h4>Abilities:</h4>
                        <div id="abilities"></div>
                    </div>
                    
                </div>
                <div class="stat-row">
                    <div class="stat-desc">SPD</div>
                    <div class="stat-number">045</div>
                    <div class="stat-bar">
                        <div class="bar-outer">
                            <div class="bar-inner" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../SAE105/js/script.js"></script>
    <?php
// Appel du Pied de Page
require 'footer.php';
?>
</body>
</html>