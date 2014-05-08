<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[tid].tpl.php
 *   simplenews-newsletter-body--[view mode].tpl.php
 *   simplenews-newsletter-body--[tid]--[view mode].tpl.php
 * See README.txt for more details.
 *
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $title: Node title
 * - $language: Language code
 * - $view_mode: Active view mode
 * - $simplenews_theme: Contains the path to the configured mail theme.
 * - $simplenews_subscriber: The subscriber for which the newsletter is built.
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implemention.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
?>
<table class="row header" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; background: #999999; padding: 0px;" bgcolor="#999999"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="center" align="center" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" valign="top">
              <center style="width: 100%; min-width: 580px;">
                <table class="container" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="wrapper last" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">

                      <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="last" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                            <a href="http://katakrak.net"><img src="<?php print 'http://www.katakrak.net/'.drupal_get_path('theme', 'coworker').'/images/boletin/buletin_header.png' ?>" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; max-width: 100%; float: left; clear: both; display: block;" align="left" /></a></td>
                          <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                        </tr></table></td>
                  </tr></table></center>
            </td>
          </tr></table><br /><table class="container" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top">

              <!-- content start -->
              <table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; padding: 0px;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="wrapper last" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
                    <table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                          <h1 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 40px; margin: 0; padding: 0;" align="left"><?php print $build['#node']->title ?></h1>
                          <?php if ($build['#node']->field_boletin_imagen['und'][0]['uri']): ?>
                              <?php print theme('image_style', array('style_name' => 'boletin_destacado', 'path' => $build['#node']->field_boletin_imagen['und'][0]['uri'])) ?>
                          <?php endif; ?></td>
                        <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                      </tr></table><table class="twelve columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><?php if ($build['#node']->body[LANGUAGE_NONE][0]['value']): ?>
                          <td class="panel" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; background: #f2f2f2; margin: 0; padding: 10px; border: 1px solid #d9d9d9;" align="left" bgcolor="#f2f2f2" valign="top">
                            <p style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;" align="left"><?php print $build['#node']->body[LANGUAGE_NONE][0]['value'] ?></p>
                          </td>
                        <?php endif; ?><td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                      </tr></table></td>
                </tr></table><br /><!-- Break Tag for row --><table class="row" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; padding: 0px;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="wrapper" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 20px 0px 0px;" align="left" valign="top">

                <?php if ($build['#node']->field_boletin_libros['und'][0]): ?>
                <table class="six columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 280px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="panel" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; background: #f2f2f2; margin: 0; padding: 10px; border: 1px solid #d9d9d9;" align="left" bgcolor="#f2f2f2" valign="top">
                      <h6 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 20px; margin: 0; padding: 0;" align="left">Libros de la semana <br /> Asteko liburuak</h6>
                      <br /><?php foreach($build['#node']->field_boletin_libros['und'] as $i => $nid): ?>
                      <?php $libro = node_load($nid['nid']); ?>
                      <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; padding: 0;">
                        <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                          <td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                            <a href="http://www.katakrak.net/<?php print drupal_get_path_alias('node/'.$libro->nid) ?>?utm_source=buletina&utm_medium=email&utm_content=liburuak&utm_campaign=buletina" style="color: #2ba6cb; text-decoration: none;"><?php print $libro->title ?></a>
                            </td>
                          </tr>
                      <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                            <td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                              <?php print theme('image_style', array('style_name' => 'book_thumbnail', 'path' => $libro->field_libro_portada['und'][0]['uri'])) ?>
                            </td>
                          </tr>
                      </table><?php if (count($build['#node']->field_boletin_libros['und']) != $i + 1): ?>
                          <hr style="color: #d9d9d9; height: 1px; background: #d9d9d9; border: none;" /><?php endif; ?><?php endforeach; ?></td>
                    <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                  </tr>
                </table>
                <?php endif; ?>        
                        </td>
              <td class="wrapper last" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
                
                  <?php if ($build['#node']->field_boletin_eventos['und'][0]): ?>
                <table class="six columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 280px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                      <h6 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 20px; margin: 0; padding: 0;" align="left">Próximos eventos Hurrengo ekitaldiak</h6>
                      <br /><?php foreach($build['#node']->field_boletin_eventos['und'] as $i => $nid): ?>
                      <?php $event = node_load($nid['nid']); 
                            $translations = translation_node_get_translations($event->tnid);
                            ?>
                      <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                        <table class="two sub-columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 80px; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top"><strong>
                                <?php print format_date($event->field_event_date['und'][0]['value'], 'custom', 'M', NULL, 'eu') ?>
                                 <?php print format_date($event->field_event_date['und'][0]['value'], 'custom', 'd', NULL, 'es') ?>
                                <?php print format_date($event->field_event_date['und'][0]['value'], 'custom', 'M', NULL, 'es') ?><br /><?php print format_date($event->field_event_date['und'][0]['value'], 'custom', 'G:i', NULL, 'es') ?>
                                </strong>
                              </td>
                            </tr></table></td>
                        <td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                        <table class="four sub-columns last" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 180px; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;" align="left" valign="top">
                              [EUS] <a href="http://www.katakrak.net/eus/<?php print drupal_get_path_alias('node/'.$translations['eu']->nid, 'eu') ?>?utm_source=buletina&utm_medium=email&utm_content=egitaraua&utm_campaign=buletina" style="color: #2ba6cb; text-decoration: none;"> <?php print $translations['eu']->title ?></a><br />
                              [CAS] <a href="http://www.katakrak.net/cas/<?php print drupal_get_path_alias('node/'.$translations['es']->nid, 'es') ?>?utm_source=buletina&utm_medium=email&utm_content=egitaraua&utm_campaign=buletina" style="color: #2ba6cb; text-decoration: none;"> <?php print $translations['es']->title ?></a>
                            </td>
                          </tr></table></td>
                        </tr></table><?php endforeach; ?><table class="button" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; overflow: hidden; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; background: #2ba6cb; margin: 0; padding: 8px 0; border: 1px solid #2284a1;" align="center" bgcolor="#2ba6cb" valign="top">
                            <a href="http://www.katakrak.net/agenda?utm_source=buletina&utm_medium=email&utm_content=egitaraua&utm_campaign=buletina" style="color: #ffffff; text-decoration: none; font-weight: bold; font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Ver todos los eventos <br /> Ikusi egitarau osoa</a>
                          </td>
                        </tr></table></td>
                    <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                    </tr>
                </table>
                <?php endif; ?>
                  <br /><table class="six columns" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 280px; margin: 0 auto; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td class="panel" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; background: #f2f2f2; margin: 0; padding: 10px; border: 1px solid #d9d9d9;" align="left" bgcolor="#f2f2f2" valign="top">
                      <h6 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 20px; margin: 0 0 5px; padding: 0;" align="left">Sare sozialetan / En las RRSS:</h6>
                      <table class="tiny-button facebook" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; overflow: hidden; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; background: #3b5998; margin: 0; padding: 5px 0 4px; border: 1px solid #2d4473;" align="center" bgcolor="#3b5998" valign="top">
                              <a href="http://facebook.com/katakrak54" style="color: #ffffff; text-decoration: none; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Facebook</a>
                            </td>
                          </tr></table><hr style="color: #d9d9d9; height: 1px; background: #d9d9d9; border: none;" /><table class="tiny-button twitter" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; overflow: hidden; padding: 0;"><tr style="vertical-align: top; text-align: left; padding: 0;" align="left"><td style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; background: #00acee; margin: 0; padding: 5px 0 4px; border: 1px solid #0087bb;" align="center" bgcolor="#00acee" valign="top">
                              <a href="http://twitter.com/katakrak54" style="color: #ffffff; text-decoration: none; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Twitter</a>
                            </td>
                          </tr></table><hr style="color: #d9d9d9; height: 1px; background: #d9d9d9; border: none;" /><br /><h6 style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 20px; margin: 0 0 5px; padding: 0;" align="left">Kontaktua <br /> Contacto:</h6>
                      <p style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;" align="left"><b>C/Mayor 54 Kale Nagusia, 31001 Pamplona-Iruñea</b></p>
                      <p style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;" align="left">Teléfono / Telefonoa: <b>948225520</b></p>
                      <p style="color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;" align="left">Correo / Emaila: <a href="mailto:info@katakrak.net" style="color: #2ba6cb; text-decoration: none;">info@katakrak.net</a></p>
                    </td>
                    <td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;" align="left" valign="top"></td>
                  </tr></table></td>
            </tr></table><br /><br /><!-- container end below --></td>
        </tr></table>