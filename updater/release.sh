npm run build
release=`node ./dist/index.js`
curDir=`pwd`
mkdir -p /tmp/releases
wget https://github.com/phalcon/ide-stubs/archive/$release.zip -O /tmp/releases/release.zip
cd /tmp/releases/
unzip -o /tmp/releases/release.zip
cd $(ls -d */|head -n 1)/src/
rm -Rf ${curDir}/../plugin/Phalcon/Phalcon
mv Phalcon ${curDir}/../plugin/Phalcon/
cd ${curDir}/../plugin/
version_number=${release/v/}
# update the xml file META-INF/plugin.xml
template=`cat << EOF
<idea-plugin version="2">
  <id>cyberhck.github.idea.plugin.phalcon</id>
  <name>Phalcon auto-complete</name>
  <version>${version_number}</version>
  <vendor email="gautam.nishchal@gmail.com" url="https://github.com/cyberhck">Nishchal Gautam</vendor>

  <description><![CDATA[
    Provides autocompletions for Phalcon framework
  ]]></description>

  <change-notes><![CDATA[
    <h3>${release}</h3>
    <ul>
      <li>updated to phalcon ${release}</li>
    </ul>
  ]]>
  </change-notes>

  <idea-version since-build="163.3984"/>

  <depends>com.intellij.modules.platform</depends>
  <depends>com.jetbrains.php</depends>

  <extensions defaultExtensionNs="com.jetbrains.php">
    <libraryRoot id="library" path="/Phalcon/Phalcon" runtime="false"/>
  </extensions>
</idea-plugin>
EOF
`
echo "$template" > META-INF/plugin.xml
zip -r phpstorm-library-plugin.jar *


cd ${curDir}/../
git add plugin
git remote add deploy https://cyberhck:$GH_TOKEN@github.com/fossapps/PhpStorm-Phalcon-Autocomplete.git
git commit -m "feat(ide_stubs): updated plugins to $release"
git tag $release
git push origin/master
git push --tags
# create a tag
