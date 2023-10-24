<?php 
get_header(); 
?>

       <!--SLIDE SHOW-->
       <div id="header-carousel" data-flickity='{"autoPlay": true}'>

       <?php
          $args = array(
              'post_type' => 'page', // Tipo de postagem para páginas
              'meta_key' => 'aparece_slide', // Nome do campo personalizado
              'meta_value' => '1', // Valor desejado
          );

          $pages_query = new WP_Query($args);

          if ($pages_query->have_posts()) :
              while ($pages_query->have_posts()) : $pages_query->the_post();
                 ?>
                   <div class="carousel-cell">
                    <img src="<?php  echo get_custom_meta( get_the_ID(), 'imagem_slide', true ); ?>" alt="<?php the_title(); ?>">
                    <div class="text"><?php the_title(); ?><span><?php echo get_custom_meta( get_the_ID(), 'subtitulo', true ); ?></span></div>
                  </div>
                <?php
              endwhile;
              wp_reset_postdata(); // Restaura os dados originais do post
          else :
              // Caso não haja páginas encontradas com o campo personalizado
              echo 'Nenhuma página encontrada.';
          endif;
          ?>
      </div>
      <!--FIM SLIDE SHOW-->
      <!--SERVICOS-->
      <div class="box-full verde">
        <div id="chams_servicos" class="cont_four_column">

        <?php
          $args = array(
              'post_type' => 'page', // Tipo de postagem para páginas
              'meta_key' => 'aparece_chamada', // Nome do campo personalizado
              'meta_value' => '1', // Valor desejado
          );

          $pages_query = new WP_Query($args);

          if ($pages_query->have_posts()) :
              while ($pages_query->have_posts()) : $pages_query->the_post();
                 ?>
                  <div class="item">
                    <img src="<?php  echo get_custom_meta( get_the_ID(), 'imagem_chamada', true ); ?>" alt="">
                    <h3><?php the_title(); ?>
                    <p>
                      <?php echo get_custom_meta( get_the_ID(), 'resumo_chamada', true ); ?>
                    </p>
                  </h3>
                  </div>
                <?php
              endwhile;
              wp_reset_postdata(); // Restaura os dados originais do post
          else :
              // Caso não haja páginas encontradas com o campo personalizado
              echo 'Nenhuma página encontrada.';
          endif;
          ?>
        </div>
      </div>
      <!--FIM SERVICOS-->
      <!--QUEM SOMOS-->
      <div id="cham_quemsomos" class="cont_three_column">

        <h2>Quem Somos</h2>
        <p>A Freire tecnologia tem o objetivo de inovar no segmento de soluções para gestão pública.</p>

        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/img/icon_proposito.png" alt="">
          <h3>Propósito
          <p>
            <?php echo get_option( 'proposito_field' ); ?>
          </p>
        </h3>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/img/icon_missao.png" alt="">
          <h3>Missão
          <p>
          <?php echo get_option( 'missao_field' ); ?>
          </p>
        </h3>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/img/icon_visao.png" alt="">
          <h3>visão
          <p>
          <?php echo get_option( 'visao_field' ); ?>
          </p>
        </h3>
        </div>
      </div>
      <!--FIM QUEM SOMOS-->

       <!--NOSSA PRESENCA-->
       <div class="box-full verde-gradiente">
         <h2 class="title">Nossa Presença</h2>
         <p class="subtitle">Temos clientes de vários Estados do país oferecendo sistemas inteligentes para uma gestão pública mais eficiente, transparente e inovadora.</p>
         <div id="cham_nossa_presenca" class="cont_three_column">
          <div class="item">
            <h3><?php 

            echo separeLetterNumber(get_option( 'software_field' )); 
            
            ?>
            <div>
              Softwares Instalados
            </div>
          </h3>
          </div>
          <div class="item">
            <h3><?php  echo separeLetterNumber(get_option( 'vidas_servidores_field' ));  ?>
            <div>
              Vidas de servidores públicos geridas por nossas soluções
            </div>
          </h3>
          </div>
          <div class="item">
            <h3><?php  echo separeLetterNumber(get_option( 'usuarios_field' ));  ?>
            <div>
              Milhões de Usuários
            </div>
          </h3>
          </div>
          <hr>
        </div>
        <div id="cham_nossa_principais" class="cont_two_column">
            <div class="item">
            <h3>Nossas principais:</span>
            <p>
              Educação, Saúde e Assistência Social.
            </p>
          </h3>
          </div>
          <div class="item">
            <h3>Todos os órgãos públicos podem utilizar nossas soluções:</span>
            <p>
              Prefeituras, Municípios, Tribunais de Contas, Câmaras Municipais, Institutos e Fundações, Secretarias de Estados, Assembléias Legislativas, Instituições de Ensino.
            </p>
          </h3>
          </div>
        </div>
       </div>
      <!--FIM NOSSA PRESENCA-->
      <!--COMO PODEMOS AJUDAR-->
      <div class="box-full paralax-ajuda">
        <h2 class="title">Como Podemos Ajudar</h2>
        <p class="subtitle">Melhores soluções para transformar sua jornada digital</p>
        <div id="cham_ajuda" class="cont_five_column">

        <?php
                    $args = array(
                        'post_type' => 'page', 
                        'posts_per_page' => -1, 
                        'meta_key' => 'aparece_ajuda',
                        'meta_value' => '1'
                    );
                    
                    $pages_query = new WP_Query( $args );
                    
                    if ( $pages_query->have_posts() ) {

                        while ( $pages_query->have_posts() ) {
                            $pages_query->the_post();
                                                  
                        ?>
                        <div class="item">
                          <img src="<?php echo get_custom_meta( get_the_ID(), 'imagem_ajuda', true ); ?>" alt="<?php the_title(); ?>">
                          <h3><?php the_title(); ?>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                          </h3>
                        </div>

                        <?php

                        }
                        

                    } else {
                        echo 'Nenhuma página encontrada.';
                    }
                    wp_reset_postdata(); 
            ?>
        </div>
      </div>
      <!--FIM COMO PODEMOS AJUDAR-->
      <!--PROJETOS-->
      <div id="cham_projetos" class="box-full">
        <h2 class="title">Projetos</h2>
        <p class="subtitle">Conheça alguns de nossos projetos.</p>

        <div id="projetos-carousel" data-flickity='{ "groupCells": true,"wrapAround": true }'>

          
        <?php
                    $args = array(
                        'post_type' => 'page', 
                        'posts_per_page' => -1, 
                        'meta_key' => 'aparece_projetos',
                        'meta_value' => '1'
                    );
                    
                    $pages_query = new WP_Query( $args );
                    
                    if ( $pages_query->have_posts() ) {

                        while ( $pages_query->have_posts() ) {
                            $pages_query->the_post();
                                                  
                        ?>
                        <div class="carousel-cell">
                        <a href="<?php echo get_the_permalink(); ?>">
                          <div>
                            <img src="<?php echo get_custom_meta( get_the_ID(), 'imagem_projeto', true ); ?>" alt="<?php the_title(); ?>">
                            <h3><?php the_title(); ?>
                            <p>
                              <?php the_excerpt(); ?>
                            </p>
                          </h3>
                          </div>
                        </a>
                        </div>

                        <?php

                        }
                        

                    } else {
                        echo 'Nenhuma página encontrada.';
                    }
                    wp_reset_postdata(); 
            ?>          

          

        </div>

      </div>
      <!--FIM PROJETOS-->

<?php get_footer(); ?>