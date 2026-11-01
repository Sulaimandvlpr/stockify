<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <style>
      @layer base {
        html,
        body {
          margin: 0;
          padding: 0;
        }
        body {
          overscroll-behavior: none;
        }
        main > :first-child {
          margin-top: 0 !important;
        }
        main > :last-child {
          margin-bottom: 0 !important;
        }
      }
      ::-webkit-scrollbar {
        display: none;
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "outline-variant": "#c4c7c7",
              "on-background": "#1a1b1f",
              "secondary-fixed-dim": "#ffb4a3",
              "on-secondary-container": "#640f00",
              "primary-container": "#1c1b1b",
              "secondary-container": "#fd6a49",
              "error-container": "#ffdad6",
              "on-primary-fixed": "#1c1b1b",
              "surface-container-low": "#f4f3f8",
              "on-secondary-fixed": "#3d0600",
              "tertiary-fixed-dim": "#c6c6c8",
              "tertiary-container": "#1a1c1d",
              "on-tertiary-fixed": "#1a1c1d",
              "on-surface": "#1a1b1f",
              "on-tertiary": "#ffffff",
              "on-tertiary-container": "#838486",
              secondary: "#ae3115",
              "surface-variant": "#e3e2e7",
              "on-primary": "#ffffff",
              surface: "#faf9fe",
              "surface-container-high": "#e9e7ed",
              "secondary-fixed": "#ffdad2",
              "surface-dim": "#dad9df",
              "surface-container": "#eeedf3",
              "inverse-primary": "#c8c6c5",
              "primary-fixed": "#e5e2e1",
              "inverse-surface": "#2f3034",
              "inverse-on-surface": "#f1f0f5",
              "on-error-container": "#93000a",
              outline: "#747878",
              "on-error": "#ffffff",
              "tertiary-fixed": "#e2e2e4",
              "on-surface-variant": "#444748",
              "primary-fixed-dim": "#c8c6c5",
              "on-primary-fixed-variant": "#474646",
              primary: "#000000",
              "surface-bright": "#faf9fe",
              "surface-container-lowest": "#ffffff",
              tertiary: "#000000",
              "on-secondary": "#ffffff",
              "surface-container-highest": "#e3e2e7",
              error: "#ba1a1a",
              "on-tertiary-fixed-variant": "#454749",
              "on-primary-container": "#858383",
              background: "#faf9fe",
              "on-secondary-fixed-variant": "#8c1900",
              "surface-tint": "#5f5e5e",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              "space-xl": "2.5rem",
              gutter: "1.5rem",
              "space-lg": "1.5rem",
              "margin-mobile": "1rem",
              margin: "2rem",
              "gutter-sm": "1rem",
              "space-md": "1rem",
              "space-xs": "0.25rem",
              "space-sm": "0.5rem",
            },
            fontFamily: {
              "body-lg": ["DM Sans"],
              "label-lg": ["DM Sans"],
              "label-sm": ["DM Sans"],
              "body-sm": ["DM Sans"],
              "headline-md": ["Space Grotesk"],
              "headline-lg": ["Space Grotesk"],
              "headline-xl-mobile": ["Space Grotesk"],
              "label-md": ["DM Sans"],
              "headline-sm": ["Space Grotesk"],
              "headline-xl": ["Space Grotesk"],
              "body-md": ["DM Sans"],
            },
            fontSize: {
              "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
              "label-lg": ["14px", { lineHeight: "18px", fontWeight: "600" }],
              "label-sm": [
                "10px",
                {
                  lineHeight: "12px",
                  letterSpacing: "0.04em",
                  fontWeight: "700",
                },
              ],
              "body-sm": ["12px", { lineHeight: "16px", fontWeight: "400" }],
              "headline-md": [
                "24px",
                {
                  lineHeight: "30px",
                  letterSpacing: "-0.015em",
                  fontWeight: "600",
                },
              ],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "38px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-xl-mobile": [
                "36px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "label-md": ["12px", { lineHeight: "16px", fontWeight: "600" }],
              "headline-sm": [
                "18px",
                {
                  lineHeight: "24px",
                  letterSpacing: "-0.01em",
                  fontWeight: "600",
                },
              ],
              "headline-xl": [
                "56px",
                {
                  lineHeight: "60px",
                  letterSpacing: "-0.03em",
                  fontWeight: "700",
                },
              ],
              "body-md": ["14px", { lineHeight: "20px", fontWeight: "400" }],
            },
          },
        },
      };
    </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400..700;1,9..40,400..700&amp;family=Space+Grotesk:wght@500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
  </head>