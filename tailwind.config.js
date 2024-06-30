/** @type {import('tailwindcss').Config} */
import preset from './vendor/filament/support/tailwind.config.preset'
const colors = require('tailwindcss/colors')
export default {
    // presets: [preset],
    content: [
         './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
darkMode: 'class',
    theme: {
        extend: {
            maxWidth: {
                container: '76.25rem',
                content: '58.75rem',
                sidebar: '22.75rem',
                mobilemenu: '13rem',
                sectionTitle: '37rem',
                '50rem': '50rem',
                '60rem': '60rem',
                '65rem': '65rem',
            },
            width: {
                4.5: '1.125rem', // 18px
                7.5: '1.875rem', // 30px
                13: '3.125rem', // 50px
                15: '3.75rem', // 60px
                18: '4.5rem', // 72px
            },
            height: {
                4.5: '1.125rem', // 18px
                7.5: '1.875rem', // 30px
                13: '3.125rem', // 50px
                15: '3.75rem', // 60px
                18: '4.5rem', // 72px
            },
            padding: {
                4.5: '1.125rem', // 18px
                7.5: '1.875rem', // 30px
                13: '3.125rem', // 50px
                15: '3.75rem', // 60px
                18: '4.5rem', // 72px
            },
            margin: {
                4.5: '1.125rem', // 18px
                7.5: '1.875rem', // 30px
                13: '3.125rem', // 50px
                15: '3.75rem', // 60px
                18: '4.5rem', // 72px
            },
            fontFamily: {
                sans: ["'Poppins', sans-serif"],
            },
            fontSize: {
                lead: '2.45rem', // 40px
                regular: '0.94rem', //15px
            },
            lineHeight: {
                1.15: '1.15',
                1.27: '1.27',
                1.875: '1.875',
            },
            borderRadius: {
                '4xl': '2.5rem', // 40px
            },
            borderWidth: {
                '3': '3px',
                '5': '5px',
                '6': '6px',
                '10': '10px',
            },
            colors: {
                snowWhite: 'var(--snowWhite)',
                flashWhite: 'var(--flashWhite)',
                platinum: 'var(--platinum)',
                colorGray: 'var(--colorGray)',
                colorSilver: 'var(--colorSilver)',
                theme: 'var(--themeColor)',
                themeHover: 'var(--themeHoverColor)',
                power__black: 'var(--power__black)',
                nightBlack: 'var(--nightBlack)',
                metalBlack: 'var(--metalBlack)',
                lightOrange: 'var(--lightOrange)',
                greyBlack: 'var(--greyBlack)',
                greyBlack200: 'var(--greyBlack200)',

                primary: colors.blue, // accent color
                secondary: colors.zinc, // choose a dark color.
                tertiary: colors.rose, // highlight effects color
            },
            spacing: {
                4.5: '1.125rem', // 18px
                7.5: '1.875rem', // 30px
                13: '3.125rem', // 50px
                15: '3.75rem', // 60px
                18: '4.5rem', // 72px
            },
            keyframes: {
                topToBottom: {
                    '0%': {
                        top: '-4rem',
                    },
                    '100%': {
                        top: '100%',
                    },
                },
                bottomToTop: {
                    '0%': {
                        bottom: '-4rem',
                    },
                    '100%': {
                        bottom: '100%',
                    },
                },
                lineheight: {
                    '0%': {
                        height: '0%',
                    },
                    'to': {
                        height: '100%',
                    }
                },
                lineround: {
                    'transform': {
                        height: 'translateY(-100%)',
                    },
                    'transform': {
                        height: 'translateY(200%)',
                    }
                },
                preloadedzero: {
                    '0%': {
                        width: '50%',
                    },
                    'to': {
                        width: '0',
                    }
                },
            },
            animation: {
                'spin-slow': 'spin 6s linear infinite',
                top_bottom: 'topToBottom 25s linear infinite',
                bottom_top: 'bottomToTop 25s linear infinite',
                lineheight: 'lineheight 1s ease-in-out 0s forwards',
                lineround: 'lineround 1.2s linear 2s infinite',
                preloadedzero: 'preloadedzero 0.3s ease-in-out 0.5s forwards',
            },
            boxShadow: {
                dots_glow: '0 0 0 .5rem rgba(255, 255, 255, 0.15)',
                '3xl': '0px 0px 30px 0px rgba(0, 0, 1, 0.05)',
                theme_shadow: '0px 5px 10px 0px rgba(0, 188, 145, 0.30)',
            },
            zIndex: {
                1: '1',
                999: '999',
            },
            blur: {
                xs: '1.5px',
            },
        },
    },
    plugins: [
  ],
}

