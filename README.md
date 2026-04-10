# wordpress-ssh

WordPress site managed via GitHub Actions + WP Engine.

## Branches

| Branch | WP Engine Environment |
|--------|----------------------|
| `main` | Production |
| `stg`  | Staging |
| `qa`   | Staging (parallel) |
| `dev`  | Development |

## Deployment

Every push to a deployment branch automatically:
1. Runs PHP lint
2. Deploys to the mapped WP Engine environment via SSH

## Required GitHub Secrets

- `WPE_SSHG_KEY_PRIVATE` — base64-encoded WP Engine SSH private key
- `WPE_PROD_ENV_NAME` — WP Engine production install name
- `WPE_STAGING_ENV_NAME` — WP Engine staging install name
- `WPE_DEV_ENV_NAME` — WP Engine dev install name
