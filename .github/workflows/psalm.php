name: Psalm Static analysis

on: [push, pull_request]

jobs:
  psalm:
    name: Psalm
    runs-on: ubuntu-latest
    steps:
      - name: Checkout code
        uses: actions/checkout@v2
      - name: Psalm
        uses: docker://vimeo/psalm-github-actions
