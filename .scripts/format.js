const watch = require('node-watch')
const fs = require('fs')
const path = require('path')
const { exec } = require('child_process')

const extensions = [
  '.html',
  '.css',
  '.js',
  '.jsx',
  '.ts',
  '.tsx',
  '.md',
  '.json',
  '.php'
]
const prettify = (event, filePath) => {
  if (event === 'update') {
    for (let extension of extensions) {
      if (filePath.endsWith(extension) && event === 'update') {
        console.log(`prettifying ${filePath}`)
        exec(`pnpm format:prettier "${path.join(process.cwd(), filePath)}"`)
      }
    }
  }
}

watch(
  './',
  {
    recursive: true,
    filter: (f) => !/public|storage|node_modules|\.git|\.next|\.public/.test(f)
  },
  function (event, filepath) {
    // console.log('%s changed.', name)
    prettify(event, filepath)
  }
)
