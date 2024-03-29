import { BUTTON_BLOCK } from '../../helpers';
import {
  RichText,
  getColorClassName,
  getFontSizeClass,
  useBlockProps,
} from '@wordpress/block-editor';
import classnames from 'classnames';

export default function save( { attributes } ) {
  const {
    content,
    size,
    url,
    target,
    isCircle,
    isShine,
    backgroundColor,
    textColor,
    borderColor,
    customBackgroundColor,
    customTextColor,
    customBorderColor,
    fontSize,
  } = attributes;

  const backgroundClass = getColorClassName(
    'background-color',
    backgroundColor
  );
  const textClass = getColorClassName( 'color', textColor );
  const borderClass = getColorClassName( 'border-color', borderColor );
  const fontSizeClass = getFontSizeClass( fontSize );

  // const classes = BUTTON_BLOCK;
  const classes = classnames( {
    [ BUTTON_BLOCK ]: true,
  } );

  const styles = {
    '--cocoon-custom-background-color': customBackgroundColor || undefined,
    '--cocoon-custom-text-color': customTextColor || undefined,
    '--cocoon-custom-border-color': customBorderColor || undefined,
  };

  const blockProps = useBlockProps.save( {
    className: classes,
    style: styles,
  } );

  return (
    <div { ...blockProps }>
      <a
        href={ url }
        className={ classnames( {
          btn: true,
          [ size ]: size,
          [ 'btn-circle' ]: !! isCircle,
          [ 'btn-shine' ]: !! isShine,
          'has-text-color': textColor || customTextColor,
          'has-background': backgroundColor || customBackgroundColor,
          'has-border-color': borderColor || customBorderColor,
          [ textClass ]: textClass,
          [ backgroundClass ]: backgroundClass,
          [ borderClass ]: borderClass,
          [ fontSizeClass ]: fontSizeClass,
        } ) }
        target={ target }
        rel="noopener"
      >
        <RichText.Content value={ content } />
      </a>
    </div>
  );
}
