 <header>
  <div class="icon-mobile-menu">
    <i class="fa fa-bars"></i>
  </div>
  <a href="./"><figure class="logo"><img src="img/logo_grupo_valor.png"  alt="Logo Grupo Valor"></figure></a>

  <nav class="main-menu">
    <ul>
      <Li><a href="<?php echo $res['baseInicio']; ?>" class="<?php echo $res['inicio']; ?>" ><span>Inicio</span></a></Li>
      <Li><a href="<?php echo $res['base']; ?>nosotros" class="<?php echo $res['nosotros']; ?>" ><span>Nosotros</span></a></Li>
      <li><a href="<?php echo $res['base']; ?>proyectos" class="<?php echo $res['proyectos'].' '.$res['ventas'].' '.$res['ejecucion'].' '.$res['realizados']; ?>"><span>Proyectos</span></a></li>
      <li><a href="<?php echo $res['base']; ?>novedades" class="<?php echo $res['novedades']; ?>"><span>Novedades</span></a></li>
      <li><a href="<?php echo $res['base']; ?>servicios" class="<?php echo $res['servicios']; ?>"><span>Servicios</span></a></li>
      <li><a href="<?php echo $res['base']; ?>contacto" class="<?php echo $res['contacto']; ?>"><span>Contacto</span></a></li>
    </ul>
  </nav>
</header>
