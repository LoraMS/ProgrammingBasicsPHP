<ul>
    <?php for ($i = 1; $i <= 20; $i++) { ?>
        <li>
            <?php if ($i % 2 === 0){ ?>
              <span style="color:green">
                  <?php echo $i;?>
              </span>
            <?php } else{ ?>
                <span style="color:blue">
                    <?php echo $i;?>
                </span>
            <?php } ?>
        </li>
    <?php } ?>
</ul>
